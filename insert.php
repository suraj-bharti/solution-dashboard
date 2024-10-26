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
            <h2>Insert New Record</h2>
        </header>
		<div class="boxed">
        <form method="post" action="/update">
            <div class="row">
				<div class="col-2">
					<label>Company</label>
					<input type="text" name="company" v-model="form.company" placeholder="Company">
				</div>
				<div class="col-2">
					<label>Lob</label>
					<input type="text" name="lob" v-model="form.lob" placeholder="Lob">
				</div>
				<div class="col-2">
					<label>Sales force id</label>
					<input type="text" name="sales_force_id" v-model="form.sales_force_id" placeholder="Sales force id">
				</div>
				<div class="col-2">
					<label>Vertical</label>
					<input type="text" name="vertical" v-model="form.vertical" placeholder="Vertical">
				</div>
				<div class="col-2">
					<label>Type of client</label>
					<input type="text" name="type_of_client" v-model="form.type_of_client" placeholder="Type of client">
				</div>
				<div class="col-2">
					<label>Market served</label>
					<input type="text" name="market_served" v-model="form.market_served" placeholder="Market served">
				</div>
				<div class="col-2">
					<label>Response type</label>
					<input type="text" name="response_type" v-model="form.response_type" placeholder="Response type">
				</div>
				<div class="col-2">
					<label>Commercials</label>
					<input type="text" name="commercials" v-model="form.commercials" placeholder="Commercials">
				</div>
				<div class="col-2">
					<label>Total ftes</label>
					<input type="text" name="total_ftes" v-model="form.total_ftes" placeholder="Total ftes">
				</div>
				<div class="col-2">
					<label>Fte break up</label>
					<input type="text" name="fte_break_up" v-model="form.fte_break_up" placeholder="Fte break up">
				</div>
				<div class="col-2">
					<label>Waha proposed</label>
					<input type="text" name="waha_proposed" v-model="form.waha_proposed" placeholder="Waha proposed">
				</div>
				<div class="col-2">
					<label>Waha</label>
					<input type="text" name="waha" v-model="form.waha" placeholder="Waha">
				</div>
				<div class="col-2">
					<label>Location</label>
					<input type="text" name="location" v-model="form.location" placeholder="Location">
				</div>
				<div class="col-2">
					<label>Languages</label>
					<input type="text" name="languages" v-model="form.languages" placeholder="Languages">
				</div>
				<div class="col-2">
					<label>Seeding</label>
					<input type="text" name="seeding" v-model="form.seeding" placeholder="Seeding">
				</div>
				<div class="col-2">
					<label>Hourly rate</label>
					<input type="text" name="hourly_rate" v-model="form.hourly_rate" placeholder="Hourly rate">
				</div>
				<div class="col-2">
					<label>Acv</label>
					<input type="text" name="acv" v-model="form.acv" placeholder="Acv">
				</div>
				<div class="col-2">
					<label>Tcv</label>
					<input type="text" name="tcv" v-model="form.tcv" placeholder="Tcv">
				</div>
				<div class="col-2">
					<label>Deal term years</label>
					<input type="text" name="deal_term_years" v-model="form.deal_term_years" placeholder="Deal term years">
				</div>
				<div class="col-2">
					<label>Opportunity</label>
					<textarea type="text" rows="5" name="opportunity" v-model="form.opportunity" placeholder="Opportunity"></textarea>
				</div>
				<div class="col-2">
					<label>Channels</label>
					<input type="text" name="channels" v-model="form.channels" placeholder="Channels">
				</div>
				<div class="col-2">
					<label>Proposed solution highlights</label>
					<textarea type="text" rows="5" name="proposed_solution_highlights" v-model="form.proposed_solution_highlights" placeholder="Proposed solution highlights"></textarea>
				</div>
				<div class="col-2">
					<label>Solution drivers win themes</label>
					<textarea type="text" rows="5" name="solution_drivers_win_themes" v-model="form.solution_drivers_win_themes" placeholder="Solution drivers win themes"></textarea>
				</div>
				<div class="col-2">
					<label>Transformation benefit</label>
					<input type="text" name="transformation_benefit" v-model="form.transformation_benefit" placeholder="Transformation benefit">
				</div>
				<div class="col-2">
					<label>Transformation category</label>
					<input type="text" name="transformation_category" v-model="form.transformation_category" placeholder="Transformation category">
				</div>
				<div class="col-2">
					<label>Tp cloud campus</label>
					<input type="text" name="tp_cloud_campus" v-model="form.tp_cloud_campus" placeholder="Tp cloud campus">
				</div>
				<div class="col-2">
					<label>Key products offered</label>
					<input type="text" name="key_products_offered" v-model="form.key_products_offered" placeholder="Key products offered">
				</div>
				<div class="col-2">
					<label>Date of receipt</label>
					<input type="text" name="date_of_receipt" v-model="form.date_of_receipt" placeholder="Date of receipt">
				</div>
				<div class="col-2">
					<label>Date of submission</label>
					<input type="text" name="date_of_submission" v-model="form.date_of_submission" placeholder="Date of submission">
				</div>
				<div class="col-2">
					<label>Tat</label>
					<input type="text" name="tat" v-model="form.tat" placeholder="Tat">
				</div>
				<select type="text" name="status" v-model="form.status" placeholder="Status">
                    <option value="WIP" selected>WIP</option>
                    <option value="Submitted">Submitted</option>
                    <option value="Dropped">Dropped</option>
                    <option value="Closed">Closed</option>
                    <option value="Hold">Hold</option>
                </select>
				<div class="col-2">
					<label>Current document status</label>
					<input type="text" name="current_document_status" v-model="form.current_document_status" placeholder="Current document status">
				</div>
				<div class="col-2">
					<label>Type of bid</label>
					<input type="text" name="type_of_bid" v-model="form.type_of_bid" placeholder="Type of bid">
				</div>
				<div class="col-2">
					<label>Bid lead</label>
					<input type="text" name="bid_lead" v-model="form.bid_lead" placeholder="Bid lead">
				</div>
				<div class="col-2">
					<label>Bid support</label>
					<input type="text" name="bid_support" v-model="form.bid_support" placeholder="Bid support">
				</div>
				<div class="col-2">
					<label>Transformation spoc</label>
					<input type="text" name="transformation_spoc" v-model="form.transformation_spoc" placeholder="Transformation spoc">
				</div>
				<div class="col-2">
					<label>Designer name</label>
					<input type="text" name="designer_name" v-model="form.designer_name" placeholder="Designer name">
				</div>
				<div class="col-2">
					<label>Ops spoc</label>
					<input type="text" name="ops_spoc" v-model="form.ops_spoc" placeholder="Ops spoc">
				</div>
				<div class="col-2">
					<label>Bd support</label>
					<input type="text" name="bd_support" v-model="form.bd_support" placeholder="Bd support">
				</div>
				<div class="col-2">
					<label>Current account status 1st level</label>
					<input type="text" name="current_account_status_1st_level" v-model="form.current_account_status_1st_level" placeholder="Current account status 1st level">
				</div>
				<div class="col-2">
					<label>Stage 2nd level</label>
					<input type="text" name="stage_2nd_level" v-model="form.stage_2nd_level" placeholder="Stage 2nd level">
				</div>
				<div class="col-2">
					<label>Reason 3rd level</label>
					<input type="text" name="reason_3rd_level" v-model="form.reason_3rd_level" placeholder="Reason 3rd level">
				</div>
				<div class="col-2">
					<label>Notes</label>
					<input type="text" name="notes" v-model="form.notes" placeholder="Notes">
				</div>
				<div class="col-2">
					<label>Year reported</label>
					<input type="text" name="year_reported" v-model="form.year_reported" placeholder="Year reported">
				</div>
				<div class="col-2">
					<label>Competition name</label>
					<input type="text" name="competition_name" v-model="form.competition_name" placeholder="Competition name">
				</div>
				<div class="col-2">
					<label>Gate 0</label>
					<input type="text" name="gate_0" v-model="form.gate_0" placeholder="Gate 0">
				</div>
				<div class="col-2">
					<label>Gate 1</label>
					<input type="text" name="gate_1" v-model="form.gate_1" placeholder="Gate 1">
				</div>
				<div class="col-2">
					<label>Ebitda margin</label>
					<input type="text" name="ebitda_margin" v-model="form.ebitda_margin" placeholder="Ebitda margin">
				</div>
				<div class="col-2">
					<label>Ebit margin</label>
					<input type="text" name="ebit_margin" v-model="form.ebit_margin" placeholder="Ebit margin">
				</div>
				<div class="col-2">
					<label>Gross margin</label>
					<input type="text" name="gross_margin" v-model="form.gross_margin" placeholder="Gross margin">
				</div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="submit" class="btn" value="Add New">
                </div>
            </div>
        </form>
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
                    form: {}
                }
            },
            mounted(){
                console.log('mounted')
            }
        }).mount('#app')
    </script>
</body>

</html>