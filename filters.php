<div class="filters">
    <form action="">
        <div class="row">
            <div class="col-2">
                <label>Company</label>
                <input type="text" name="company" v-model="form.company" placeholder="Company">
            </div>
            <div class="col-2">
                <label>Bid support</label>
                <input type="text" name="bid_support" v-model="form.bid_support" placeholder="Bid support">
            </div>
            <div class="col-2">
                <label>Status</label>
                <select name="status" v-model="form.status" placeholder="Status">
                    <option value="WIP" selected>WIP</option>
                    <option value="Submitted">Submitted</option>
                    <option value="Dropped">Dropped</option>
                    <option value="Closed">Closed</option>
                    <option value="Hold">Hold</option>
                </select>
            </div>
            <div class="col-2">
                <label for="">&nbsp;</label>
                <input type="submit" class="btn" value="Search">
            </div>
        </div>
    </form>
    <hr>
</div>