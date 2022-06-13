  /**
   * Accordion toggle
   */
   function toggleAccordion (e) {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  };
  let accordion = document.querySelector(".accordion");
  let btns = accordion.querySelectorAll(".question");

  for (const btn of btns) {
    btn.addEventListener("click", toggleAccordion);
  }