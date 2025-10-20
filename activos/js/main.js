document.getElementById('contactForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  const formData = new FormData(this);
  const response = await fetch('api/save_contact.php', { method: 'POST', body: formData });
  const result = await response.text();
  alert(result);
});