
<form class="subscribeForm form-inline" id="subscribeFormFooter" action="subscribeConfirm.php" method="POST" novalidate="novalidate">
    <div class="form-group">
        <label for="nameSubscribe" class="sr-only">Enter your name</label>
        <input type="text" class="form-control" name="nameSubscribe" id="nameSubscribe" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="emailSubscribe" class="sr-only">Enter your email</label>
        <input type="email" class="emailSubscribe form-control" id="emailSubscribe" name="emailSubscribe" placeholder="Email">
    </div>
    <button type="submit" class="btn subscribe btn-primary" id="btnSubscribeFoot">Subscribe &raquo;</button>
    <p class="help-block text-danger">
        <span class="errSubscribe small" id="errNameSubscribe">Please enter your name</span><br>
        <span class="errSubscribe small" id="errEmailSubscribe">Please enter a valid email address</span>
        <span class="small thankYou">Thank you for subscribing!</span>
    </p>
</form>

