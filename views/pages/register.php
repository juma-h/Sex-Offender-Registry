<main role="main" class="container flex-shrink-0 py-5">
    <form method="POST" //action="register.php"//>
        <div class="form-group">
            <label for="id">National ID</label>
            <input type="number" class="form-control" id="national_id" name="national_id" >
        </div>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="first_name" name="firstName" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="lastName" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="dateOfBirth" >
        </div>
        <div class="form-group">
            <label for="gender">Male</label>
            <input type="radio" class="form-control" id="male" name="gender" value="male" >
            <label for="gender">Female</label>
            <input type="radio" class="form-control" id="female" name="gender" value="female" >
            <label for="gender">Other</label>
            <input type="radio" class="form-control" id="other" name="gender" value="other" >
            <label for="gender">None</label>
            <input type="radio" class="form-control" id="none" name="gender" value="none" >
        </div> 
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" >
        </div>
        <div class="form-group">
            <label for="sexualOffenceCommitted">Sexual Offence Committed</label>
            <input type="text" class="form-control" id="sexual_offence_committed" name="sexualOffenceCommitted" >
        </div>
        <div class="form-group">
            <label for="yearIn">Start of Imprisonment</label>
            <input type="number" class="form-control" id="year_in" name="yearIn" >
        </div>
        <div class="form-group">
            <label for="yearOut">End of Imprisonment</label>
            <input type="number" class="form-control" id="year_out" name="yearOut" >
        </div>
        <div class="form-group">
            <label for="yearsServed">Years Served</label>
            <input type="number" class="form-control" id="years_served" name="yearsServed" >
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</main>