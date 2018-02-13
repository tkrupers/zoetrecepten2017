jQuery(document).ready(function() {
  const colors = ["bg-primary", "bg-warning", "bg-success", "bg-info"];

  const length = colors.length;

  jQuery("#recipe-wrapper").addClass(
    colors[Math.floor(Math.random() * length)]
  );
});
