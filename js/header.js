/**
 * Header — menu principal responsive.
 *
 * - Bouton hamburger : ouvre/ferme le panneau (mobile et tablette).
 * - Ajoute un bouton +/× (chevron sur ordinateur) à chaque élément ayant un sous-menu.
 * - Accordéon : un seul sous-menu ouvert à la fois.
 * - Échap ferme tout ; repasser en mode ordinateur referme le panneau.
 */
class Header {
    constructor(el) {
        console.log("Composant Header initialisé");
        this.el = el;
        this.toggle = el.querySelector('.menu-toggle');
        this.panel = el.querySelector('.site-menu-panel');
        this.parents = el.querySelectorAll('.menu-item-has-children');
        this.desktop = window.matchMedia('(min-width: 64em)'); // 1024px

        this.init();
    }

    init() {
        this.parents.forEach((li, i) => this.addSubmenuToggle(li, i));

        this.toggle.addEventListener('click', () => this.setPanel(!this.isPanelOpen()));

        document.addEventListener('keydown', (e) => {
            if (e.key !== 'Escape') return;
            this.closeAllSubmenus();
            if (this.isPanelOpen()) {
                this.setPanel(false);
                this.toggle.focus();
            }
        });

        // Clic en dehors du header (ordinateur) : referme les sous-menus.
        document.addEventListener('click', (e) => {
            if (this.desktop.matches && !this.el.contains(e.target)) this.closeAllSubmenus();
        });

        this.desktop.addEventListener('change', () => {
            this.setPanel(false);
            this.closeAllSubmenus();
        });
    }

    /* ---------- Panneau (hamburger) ---------- */

    isPanelOpen() {
        return this.toggle.getAttribute('aria-expanded') === 'true';
    }

    setPanel(open) {
        this.toggle.setAttribute('aria-expanded', String(open));
        this.el.classList.toggle('is-open', open);
        if (!open) this.closeAllSubmenus();
    }

    /* ---------- Sous-menus ---------- */

    addSubmenuToggle(li, index) {
        const link = li.querySelector(':scope > a');
        const sub = li.querySelector(':scope > .sub-menu');
        if (!link || !sub) return;

        const id = sub.id || `sub-menu-${index}`;
        sub.id = id;

        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'submenu-toggle';
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-controls', id);
        btn.innerHTML = `<span class="submenu-toggle__icon" aria-hidden="true"></span>
            <span class="screen-reader-text">Afficher le sous-menu : ${link.textContent.trim()}</span>`;
        link.after(btn);

        btn.addEventListener('click', () => this.setSubmenu(li, !li.classList.contains('is-open')));

        // Un lien vide (« # ») sert seulement de titre : il ouvre le sous-menu.
        const href = link.getAttribute('href');
        if (!href || href === '#') {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                this.setSubmenu(li, !li.classList.contains('is-open'));
            });
        }
    }

    setSubmenu(li, open) {
        if (open) {
            this.parents.forEach((other) => {
                if (other !== li) this.setSubmenu(other, false);
            });
        }
        li.classList.toggle('is-open', open);
        li.querySelector(':scope > .submenu-toggle')?.setAttribute('aria-expanded', String(open));
    }

    closeAllSubmenus() {
        this.parents.forEach((li) => this.setSubmenu(li, false));
    }
}

// Initialisation du menu principal responsive
document.addEventListener('DOMContentLoaded', function () {

    const elHeader = document.querySelector('[data-js-component="Header"]');

    if (elHeader) {
        new Header(elHeader);
    }

});