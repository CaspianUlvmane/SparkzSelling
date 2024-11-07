import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  connect() {
    console.log(this.element);
  }

  scrollevent(event) {
    let target = event.currentTarget.hash;
  }
}
