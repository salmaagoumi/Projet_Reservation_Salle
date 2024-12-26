// Basic example for DOM manipulation and interactivity

// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM fully loaded and parsed");

    // Example: Adding event listener to all buttons
    const buttons = document.querySelectorAll("button");
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            alert("Button clicked!");
        });
    });

    // Example: Form submission handler
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", (event) => {
            event.preventDefault(); // Prevent the form from submitting
            alert("Form submitted!");
            // Add your form submission logic here
        });
    }
});
