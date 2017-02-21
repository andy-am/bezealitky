<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign In</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-7">
                    <section class="sign-in">
                        <form class="ajax" action="/signup" method="post" role="form" data-done="reload">
                            <div class="form-group">
                                <label for="email">Email address:</label> <input name="email" class="form-control" id="email" type="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label> <input name="password" class="form-control" id="pwd" type="password">
                            </div>
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox"> Remember me</label>
                            </div><button class="btn btn-primary btn-lg" type="submit">Sign In</button>
                        </form>
                    </section>
                </div>

                <div class="col-md-5">
                    <section class="sign-up">
                        <h3>You Don't have account?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam erat volutpat <a href="#">Sign up</a>.
                        </p>
                    </section>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>