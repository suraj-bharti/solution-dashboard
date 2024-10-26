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
				<tr>
					<td>1</td>
					<td>item 1</td>
					<td>item 2</td>
					<td>item 3</td>
					<td>item 4</td>
					<td>item 5</td>
					<td>item 6</td>
					<td>item 7</td>
					<td>item 8</td>
					<td>item 9</td>
					<td>item 10</td>
					<td>item 11</td>
					<td>item 12</td>
					<td>item 13</td>
					<td>item 14</td>
					<td>item 15</td>
					<td>item 16</td>
					<td>item 17</td>
					<td>item 18</td>
					<td>item 19</td>
					<td>item 20</td>
					<td>item 21</td>
					<td>item 22</td>
					<td>item 23</td>
					<td>item 24</td>
					<td>item 25</td>
					<td>item 26</td>
					<td>item 27</td>
					<td>item 28</td>
					<td>item 29</td>
					<td>item 30</td>
					<td>item 31</td>
					<td>item 32</td>
					<td>item 33</td>
					<td>item 34</td>
					<td>item 35</td>
					<td>item 36</td>
					<td>item 37</td>
					<td>item 38</td>
					<td>item 39</td>
					<td>item 40</td>
					<td>item 41</td>
					<td>item 42</td>
					<td>item 43</td>
					<td>item 44</td>
					<td>item 45</td>
					<td>item 46</td>
					<td>item 47</td>
					<td>item 48</td>
					<td>item 49</td>
					<td>item 50</td>
				</tr>
				<tr>
					<td>2</td>
					<td>item 1</td>
					<td>item 2</td>
					<td>item 3</td>
					<td>item 4</td>
					<td>item 5</td>
					<td>item 6</td>
					<td>item 7</td>
					<td>item 8</td>
					<td>item 9</td>
					<td>item 10</td>
					<td>item 11</td>
					<td>item 12</td>
					<td>item 13</td>
					<td>item 14</td>
					<td>item 15</td>
					<td>item 16</td>
					<td>item 17</td>
					<td>item 18</td>
					<td>item 19</td>
					<td>item 20</td>
					<td>item 21</td>
					<td>item 22</td>
					<td>item 23</td>
					<td>item 24</td>
					<td>item 25</td>
					<td>item 26</td>
					<td>item 27</td>
					<td>item 28</td>
					<td>item 29</td>
					<td>item 30</td>
					<td>item 31</td>
					<td>item 32</td>
					<td>item 33</td>
					<td>item 34</td>
					<td>item 35</td>
					<td>item 36</td>
					<td>item 37</td>
					<td>item 38</td>
					<td>item 39</td>
					<td>item 40</td>
					<td>item 41</td>
					<td>item 42</td>
					<td>item 43</td>
					<td>item 44</td>
					<td>item 45</td>
					<td>item 46</td>
					<td>item 47</td>
					<td>item 48</td>
					<td>item 49</td>
					<td>item 50</td>
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