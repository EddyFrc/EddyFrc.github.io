const darkThemeMq = window.matchMedia("(prefers-color-scheme: dark)");

/**
 * Applique le thème le plus approprié dans cette situation<br>
 * Cette fonction doit être appelée quand le thème du système est modifié,
 * y compris à chaque chargement de la page.
 * @param themeOrEvent Evénement de catégorie `change` affecté à un `MediaQueryList`, ou
 * carrément un `MediaQueryList`
 */
function onSystemThemeChange(themeOrEvent) {
    // Par défaut, prend la valeur 'system' pour basculer sur le thème du système
    const theme = localStorage.getItem("theme") ?? 'system';

    // Si le thème n'est pas 'system', basculer sur le thème spécifique choisi
    if (theme !== 'system') {
        applyTheme(theme);
        return;
    }

    // Si on est ici c'est que le thème choisi n'est pas 'system'.
    if (themeOrEvent.matches)
        applyTheme('dark');
    else
        applyTheme('light');
}

/**
 * Applique un thème sombre ou clair (`'dark'` ou `'light'`)
 * @param theme `'dark'` ou `'light'`
 */
function applyTheme(theme) {
    if (theme === 'dark')
        document.head.insertAdjacentHTML(
            'beforeend',
            '<link id="dark-stylesheet" rel="stylesheet" href="/dark.css" />'
        );
    else
        document.head.removeChild(document.getElementById('dark-stylesheet'));
}

darkThemeMq.addEventListener('change', onSystemThemeChange);

onSystemThemeChange(darkThemeMq);