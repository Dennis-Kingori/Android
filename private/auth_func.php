<?php
 function log_in_coach($coach) {
  // Renerating the ID protects the coach from session fixation.
    session_regenerate_id();
    $_SESSION['coach_id'] = $coach['Id'];
    $_SESSION['last_login'] = time();
    $_SESSION['username'] = $coach['username'];
    return true;
  }
?>