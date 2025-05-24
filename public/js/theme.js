const darkThemeMq = window.matchMedia('(prefers-color-scheme: dark)');
const themeDropdown = document.getElementById('theme-selector');

/**
 * Applique un thème sombre ou clair (`'dark'` ou `'light'`)
 * @param theme `'dark'` ou `'light'`
 */
function applyTheme(theme) {
    if (theme === 'light')
        document.head.insertAdjacentHTML(
            'beforeend',
            '<link id="light-stylesheet" rel="stylesheet" href="/public/style/light.css" />'
        );
    else {
        const lightStylesheet = document.getElementById('light-stylesheet');
        if (lightStylesheet !== null) document.head.removeChild(lightStylesheet);
    }
}

/**
 * Applique le thème le plus approprié dans cette situation<br>
 * Cette fonction doit être appelée quand le thème du système est modifié,
 * y compris à chaque chargement de la page.
 * @param themeOrEvent Evénement de catégorie `change` affecté à un `MediaQueryList`, ou
 * carrément un `MediaQueryList`
 */
function onSystemThemeChange(themeOrEvent) {
    // Par défaut, prend la valeur 'system' pour basculer sur le thème du système
    const theme = localStorage.getItem('theme') ?? 'system';

    // Si le thème n'est pas 'system', basculer sur le thème spécifique choisi
    if (theme !== 'system') {
        // 0 = 'light'
        // 1 = 'dark'
        themeDropdown.options[theme === 'light' ? 0 : 1].selected = true;
        applyTheme(theme);
        return;
    }

    // Si on est ici c'est que le thème choisi est 'system'.
    // 2 = 'system'
    themeDropdown.options[2].selected = true;
    if (themeOrEvent.matches)
        applyTheme('dark');
    else
        applyTheme('light');
}

/**
 * Cette fonction doit être appelée quand l'état du sélecteur de thème change.
 */
function onThemeDropdownChange() {
    localStorage.setItem('theme', themeDropdown.options[themeDropdown.selectedIndex].value);
    onSystemThemeChange(darkThemeMq);
}

darkThemeMq.addEventListener('change', onSystemThemeChange);
themeDropdown.addEventListener('change', onThemeDropdownChange);

onSystemThemeChange(darkThemeMq);