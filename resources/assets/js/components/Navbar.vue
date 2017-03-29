<template>
 <div class="container">
   <nav class="nav">
    <div class="nav-left">
      <a class="nav-item" href="/">
        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
    </a>
</div>

<div class="nav-center">
  <a class="nav-item" href="https://www.linkedin.com/in/lishuoz/">
    <span class="icon">
      <i class="fa fa-linkedin"></i>
  </span>
</a>
</div>

<!-- This "nav-toggle" hamburger menu is only visible on mobile -->
<!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
<span class="nav-toggle">
  <span></span>
  <span></span>
  <span></span>
</span>

<!-- This "nav-menu" is hidden on mobile -->
<!-- Add the modifier "is-active" to display it on mobile -->
<div class="nav-right nav-menu">
    <a class="nav-item is-active" href="/projects">
        Projects
    </a>
    <a class="nav-item">
        About Me
    </a>
    <a class="nav-item">
        Journey
    </a>
</div>
</nav>
</div>
</template>

<script>
    export default {
      
    }
</script>
