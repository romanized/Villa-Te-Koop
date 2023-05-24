  const days = ['Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'];

const today = new Date().getDay();
const scheduleItems = document.getElementsByClassName('schedule-item');

if (today > 0 && today < 6) { // Check if today is Monday to Friday
  scheduleItems[today - 1].style.color = 'red'; // Highlight today's opening hours
}
