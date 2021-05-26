<main role="main" class="container flex-shrink-0 py-5">
    <form method="POST">
        <div class="form-group">
            <label for="id">National ID</label>
            <input type="number" class="form-control" id="national_id" name="national_id" >
        </div>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" >
        </div>
        <div class="form-group">
            <label for="gender">Male</label>
            <input type="radio" class="form-control" id="male" name="gender" value="male" >
            <label for="gender">Female</label>
            <input type="radio" class="form-control" id="female" name="gender" value="female" >
        </div> 
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" >
        </div>
        <div class="form-group">
            <label for="sexualOffenceCommitted">Sexual Offence Committed</label>
            <input type="text" class="form-control" id="sexualOffenceCommitted" name="sexualOffenceCommitted" >
        </div>
        <div class="form-group">
            <label for="yearIn">Start of Imprisonment</label>
            <input type="number" class="form-control" id="yearIn" name="yearIn" >
        </div>
        <div class="form-group">
            <label for="yearOut">End of Imprisonment</label>
            <input type="number" class="form-control" id="yearOut" name="yearOut" >
        </div>
        <div class="form-group">
            <label for="yearsServed">Years Served</label>
            <input type="number" class="form-control" id="yearsServed" name="yearsServed" >
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</main>