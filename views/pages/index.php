<main  role="main" class="container flex-shrink-0 py-5">
    <table class="table table-borderless table-hover datatable">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>National Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Occcupation</th>
                <th>Sexual Offence Committed</th>
                <th>Start of Imprisonment</th>
                <th>End of Imprisonment</th>
                <th>Years Served</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($offenders as $offender) : ?>
                <tr>
                    <td><?= $offender->id ?></td>
                    <td><?= $offender->national_id ?></td>
                    <td><?= $offender->firstName ?></td>
                    <td><?= $offender->lastName ?></td>
                    <td><?= $offender->dateOfBirth->format('jS F Y') ?></td>
                    <td><?= ((new DateTime())->diff($offender->dateOfBirth))->y ?></td>
                    <td><?= $offender->gender ?></td>
                    <td><?= $offender->occupation ?></td>
                    <td><?= $offender->sexualOffenceCommitted ?></td>
                    <td><?= $offender->yearIn ?></td>
                    <td><?= $offender->yearOut ?></td>
                    <td><?= $offender->yearsServed ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>