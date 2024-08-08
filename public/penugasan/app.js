function toggleAccordion(element) {
    const content = element.querySelector('.accordion-content');
    const arrow = element.querySelector('.arrow');
    content.classList.toggle('visible');
    arrow.classList.toggle('arrow-up');
}
