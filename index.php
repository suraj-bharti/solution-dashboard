<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Dashbarod</title>
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <h2 class="float-left">Solutions Dashbarod</h2>
			<div class="menus">
                <a href="./insert.php">Add New</a>
            </div>
        </header>
		<div class="boxed">
			<?php include('filters.php'); ?>
			<div class="table">
			<table border="1">
				<tr>
					<th>#</th>
					<th>BID</th>
					<th>Company</th>
					<th>Lob</th>
					<th>Sales_force_id</th>
					<th>Vertical</th>
					<th>Type_of_client</th>
					<th>Market_served</th>
					<th>Response_type</th>
					<th>Commercials</th>
					<th>Total_ftes</th>
					<th>Fte_break_up</th>
					<th>Waha_proposed</th>
					<th>Waha</th>
					<th>Location</th>
					<th>Languages</th>
					<th>Seeding</th>
					<th>Hourly_rate</th>
					<th>Acv</th>
					<th>Tcv</th>
					<th>Deal_term_years</th>
					<th>Opportunity</th>
					<th>Channels</th>
					<th>Proposed_solution_highlights</th>
					<th>Solution_drivers_win_themes</th>
					<th>Transformation_benefit</th>
					<th>Transformation_category</th>
					<th>Tp_cloud_campus</th>
					<th>Key_products_offered</th>
					<th>Date_of_receipt</th>
					<th>Date_of_submission</th>
					<th>Tat</th>
					<th>Status</th>
					<th>Current_document_status</th>
					<th>Type_of_bid</th>
					<th>Bid_lead</th>
					<th>Bid_support</th>
					<th>Transformation_spoc</th>
					<th>Designer_name</th>
					<th>Ops_spoc</th>
					<th>Bd_support</th>
					<th>Current_account_status_1st_level</th>
					<th>Stage_2nd_level</th>
					<th>Reason_3rd_level</th>
					<th>Notes</th>
					<th>Year_reported</th>
					<th>Competition_name</th>
					<th>Gate_0</th>
					<th>Gate_1</th>
					<th>Ebitda_margin</th>
					<th>Ebit_margin</th>
					<th>Gross_margin</th>
				</tr>
				<tr v-for="row in solutions" :key="row.id">
					<td><a href="edit.php" class="btn">Edit</a></td>
					<td>{{ row.id }}</td>
					<td>{{ row.company }}</td>
					<td>{{ row.lob }}</td>
					<td>{{ row.sales_force_id }}</td>
					<td>{{ row.vertical }}</td>
					<td>{{ row.type_of_client }}</td>
					<td>{{ row.market_served }}</td>
					<td>{{ row.response_type }}</td>
					<td>{{ row.commercials }}</td>
					<td>{{ row.total_ftes }}</td>
					<td>{{ row.fte_break_up }}</td>
					<td>{{ row.waha_proposed }}</td>
					<td>{{ row.waha }}</td>
					<td>{{ row.location }}</td>
					<td>{{ row.languages }}</td>
					<td>{{ row.seeding }}</td>
					<td>{{ row.hourly_rate }}</td>
					<td>{{ row.acv }}</td>
					<td>{{ row.tcv }}</td>
					<td>{{ row.deal_term_years }}</td>
					<td>{{ row.opportunity }}</td>
					<td>{{ row.channels }}</td>
					<td>{{ row.proposed_solution_highlights }}</td>
					<td>{{ row.solution_drivers_win_themes }}</td>
					<td>{{ row.transrowation_benefit }}</td>
					<td>{{ row.transrowation_category }}</td>
					<td>{{ row.tp_cloud_campus }}</td>
					<td>{{ row.key_products_offered }}</td>
					<td>{{ row.date_of_receipt }}</td>
					<td>{{ row.date_of_submission }}</td>
					<td>{{ row.tat }}</td>
					<td>{{ row.status }}</td>
					<td>{{ row.current_document_status }}</td>
					<td>{{ row.type_of_bid }}</td>
					<td>{{ row.bid_lead }}</td>
					<td>{{ row.bid_support }}</td>
					<td>{{ row.transrowation_spoc }}</td>
					<td>{{ row.designer_name }}</td>
					<td>{{ row.ops_spoc }}</td>
					<td>{{ row.bd_support }}</td>
					<td>{{ row.current_account_status_1st_level }}</td>
					<td>{{ row.stage_2nd_level }}</td>
					<td>{{ row.reason_3rd_level }}</td>
					<td>{{ row.notes }}</td>
					<td>{{ row.year_reported }}</td>
					<td>{{ row.competition_name }}</td>
					<td>{{ row.gate_0 }}</td>
					<td>{{ row.gate_1 }}</td>
					<td>{{ row.ebitda_margin }}</td>
					<td>{{ row.ebit_margin }}</td>
					<td>{{ row.gross_margin }}</td>
				</tr>
			</table>
			</div>
		</div>
    </div>
    <footer>
        &copy; 2024
    </footer>
	<script>
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    form: {},
					solutions: [
						{id: 1, company: 'Apple'},
						{id: 2, company: 'Micorsoft'},
						{id: 3, company: 'Facebook'},
						{id: 4, company: 'GibHub'},
					]
                }
            },
			mounted(){
				this.getData()
            },
			methods: {
				getData() {
					fetch('https://dummyjson.com/users')
					.then(res => res.json())
					.then(console.log);
				}
			}
        }).mount('#app')
    </script>
</body>

</html>