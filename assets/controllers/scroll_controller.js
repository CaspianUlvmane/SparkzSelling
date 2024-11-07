import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  connect() {
    console.log(this.element);
  }

  scrollevent(event) {
    console.log(event.currentTarget.attributes.href.value);
    let href = event.currentTarget.attributes.href.value;
    let target = event.currentTarget.attributes.href.value.split("#")[1];
    try {
      document.getElementById(target).scrollIntoView({ behavior: "smooth" });
    } catch (error) {
      window.location = href;
    }
  }
}
