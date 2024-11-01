/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./public/**/*.{html,php}"],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
