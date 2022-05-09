<main  role="main" class="container flex-shrink-0 py-5">
    <table class="table table-borderless table-hover datatable">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>N.Id</th>
                <th>F.Name</th>
                <th>L.Name</th>
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
                    <td><?= $offender->first_name ?></td>
                    <td><?= $offender->last_name ?></td>
                    <td><?= $offender->date_of_birth->format('jS F Y') ?></td>
                    <td><?= ((new DateTime())->diff($offender->date_of_birth))->y ?></td>
                    <td><?= $offender->gender ?></td>
                    <td><?= $offender->occupation ?></td>
                    <td><?= $offender->sexual_offence_committed ?></td>
                    <td><?= $offender->year_in ?></td>
                    <td><?= $offender->year_out ?></td>
                    <td><?= $offender->years_served ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>