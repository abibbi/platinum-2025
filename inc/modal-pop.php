
<div class="popup" id="popupBox">
  <div class="popup-content">
    <span class="close-btn" onclick="closePopup()">X</span>
    <h2>Notice</h2>
    <p>All mobile and online banking services will be offline from Friday, September 29th at 5:00PM through Monday, October 2nd at 9:00AM.</p>
  </div>
</div>


<script>
  window.onload = function() {
    document.getElementById('popupBox').style.display = 'flex';
  }

  function closePopup() {
    document.getElementById('popupBox').style.display = 'none';
  }
</script>
