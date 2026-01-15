<style>
    nav {
    position: relative;
    max-width: 1280px;
    margin: 0 auto;
    padding: 1.5rem 2.5rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    z-index: 1;
  }
  /* Dropdown container */
/* Dropdown menu styles */
.nav-dropdown {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%; /* Position below the nav item */
  left: 0;
  background: white;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
  padding: 1rem;
  border-radius: 12px;
  z-index: 1000;
  min-width: 220px;
}

.dropdown-menu li {
  margin: 8px 0;
}

    </style>
<nav class="main-nav" role="navigation" aria-label="Primary Navigation">
    <div class="logo">
      <img src="images/saravan1.png" alt="logo" class="logo-img">
    </div>
    <ul class="nav-menu" role="menubar" aria-label="Primary menu">
      
    <li role="none" class="nav-dropdown"><a href="#" role="menuitem">Home</a></li>
    <li role="none" class="nav-dropdown"><a href="wishlist.php" role="menuitem">Wishlist</a></li>
    <li role="none" class="nav-dropdown"><a href="cart.php" role="menuitem">My Cart</a></li>
    <li role="none" class="nav-dropdown"><a href="checkout.php" role="menuitem">Checkout</a></li>
</ul>
    <div class="actions">
      <button class="btn-register">Register Now</button>
      <button class="btn-search"><i class="fas fa-search"></i></button>
    </div>
  </nav>