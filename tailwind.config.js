module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './resources/**/*.antlers.html',
            './resources/**/*.blade.php',
            './content/**/*.md',
        ],
    },
    important: true,
    theme: {
        fontFamily: {
            gotham: [
                'Gotham XNarrow SSm A',
                'Gotham XNarrow SSm B',
                'Helvetica',
                'Arial',
                'sans-serif',
            ],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: '#222',
            gray: '#58585a',
            white: '#f9f9f9',
        },
        extend: {
            screens: {
                // Smallest width where the logo and full main menu fit on one
                // line, and where sub menus move into a sidebar. Raise this if
                // items are added to the main navigation.
                nav: '832px',
            },
            typography: {
                xl: {
                    css: {
                        p: {
                            'margin-bottom': '0.75rem',
                            'margin-top': '0.75rem',
                        },
                    },
                },
            },
        },
    },
    variants: {},
    plugins: [require('@tailwindcss/typography')],
};
