/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'figtree': [ 'Figtree', 'sans-serif' ],
            'georama': [ 'Georama', 'sans-serif' ],
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

