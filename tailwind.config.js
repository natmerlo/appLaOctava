import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/laravel/jetstream/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {},
    colors: {
      blue: {
        100: "#2D425B",
        200: "#182f49",
      },
      gold: {
        100: "#C59A6F",
        200: "#aa835c",
      },
      green: "#023515",
      white: "#ffffff",
      transparent: "transparent",
      grey: "#fafafafa",
      red: "#f86161"
    },
  },

  plugins: [forms, typography],
};
