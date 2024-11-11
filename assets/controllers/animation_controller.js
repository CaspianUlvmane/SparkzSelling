import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  // Removes scaleanimation class from affected element
  connect() {
    this.element.classList.remove("scaleanimation");
  }

  // Creates a spinning circle using before and after pseudo elements
  loading() {
    if (this.element.form.checkValidity()) {
      this.element.classList.add(
        "before:animate-spin",
        "before:w-4",
        "before:h-4",
        "before:rounded-full",
        "before:block",
        "before:bg-gradient-to-t",
        "before:to-Blue-500",
        "before:via-Blue-800",
        "before:from-Blue-900",
        "after:w-3",
        "after:h-3",
        "after:rounded-full",
        "after:bg-Blue-200",
        "after:absolute",
        "after:hover:bg-white",
        "after:left-[1.87rem]",
        "after:transition-all",
        "after:duration-300",
        "after:animate-spin"
      );
      this.element.textContent = "Skickar";
    }
  }
}
