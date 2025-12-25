document.querySelectorAll("a").forEach(link => {
  link.addEventListener("mouseenter", () => {
    link.style.opacity = "0.7";
  });
  link.addEventListener("mouseleave", () => {
    link.style.opacity = "1";
  });
});
