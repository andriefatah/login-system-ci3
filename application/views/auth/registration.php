
<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Get started</h1>
    <p class="sign-up__subtitle">Start creating the best possible user experience for you customers</p>
    <form class="sign-up-form form" action="" method="">
      <label class="form-label-wrapper">
        <p class="form-label">Name</p>
        <input class="form-input" type="text" placeholder="Enter your name" id="name" name="name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="text" placeholder="Enter your email" id="email" name="email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" placeholder="Enter your password" id="password" name="password" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password Confirmation</p>
        <input class="form-input" type="password" placeholder="Enter your password" id="password2" name="password2" required>
      </label>
      <button type="submit" class="form-btn primary-default-btn transparent-btn">Sign Up</button>
        <label class="form-label-wrapper">
          <a class="text-center mt-2" href="<?= base_url(''); ?>auth">Already have an account? Login!</a>
        </label>
    </form>
  </article>
</main>