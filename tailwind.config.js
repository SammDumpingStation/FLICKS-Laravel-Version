/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary-black": "#212121", /* mainly-bg */
                "secondary-black": "#171717", /* mainly navbar */
                "tertiary-black": "#2F2F2F", /* mainly search bar */
                "primary-white": "#ECECEC", /* 90% font */
                "primary-grey": "#9B9B9B", /* 10% font */
                "secondary-grey": "#383838", /* mainly border */
                "primary-green": "#14A27F", /* mainly buttons */
                "primary-yellow": "#f2ac42", //Edit Button
                "primary-red": "#EA324C", //Delete button
            },
        },
    },
    plugins: [],
};
