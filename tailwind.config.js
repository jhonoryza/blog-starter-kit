//const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Quicksand', 'ui-sans-serif'],
                'mono': ['Quicksand', 'ui-serif'],
                'serif': ['Quicksand', 'ui-monospace'],
            },
            colors: {
                danger: colors.rose,
                primary: colors.sky,
                success: colors.green,
                warning: colors.purple,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/typography'),
    ],
}
