<div class="mb-6">
    <form method="post">

        <div class="row">
            <div class="col">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" placeholder="Text input" name="name" id="name">
            </div>

            <div class="col">
                <label class="form-label" for="username">Username</label>
                <input class="form-control is-success" type="text" placeholder="Text input" name="username"
                       id="username">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label" for="email">Email</label>
                <input class="form-control is-danger" type="email" placeholder="Email input" name="email" id="email">
            </div>

            <div class="col">
                <label class="form-label" for="subject">Subject</label>
                <select class="form-select" id="subject">
                    <option>Select dropdown</option>
                    <option>With options</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" placeholder="Textarea" id="message"></textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="terms">
            <label class="form-check-label" for="terms">
                I agree to the <a href="#">terms and conditions</a>
            </label>
        </div>

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="question">
            <label class="form-check-label" for="question">Yes?</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
