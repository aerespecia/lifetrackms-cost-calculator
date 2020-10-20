<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch gutter-b bg-light-primary">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Current Number of Study per day</label>
                                            <input type="number" id="noStudyPerday" class="form-control" placeholder="Enter number of cases"/>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Number of Study Growth per Month in %</label>
                                            <div class="input-group">
                                                <input type="number" id="noStudyGrowthPercentage" class="form-control" placeholder="Enter percentage growth">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-percent icon-lg"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>Number of Months to Forecast</label>
                                            <input type="number" id="noOfMonthsToForecast" class="form-control" placeholder="Enter number of months"/>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <button type="button" id="generateForecast" class="btn btn-primary btn-lg btn-block">Generate Forecast</button>
                                        </div>
                                    </div>
                                </div>	
                            </form>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Results</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4">
                                    <p>Current Number of Study per day: <span id="labelNoStudies" class="font-weight-boldest"></span></p>
                                </div>
                                <div class="col-xl-4">
                                    <p>Number of Study Growth per Month in %: <span id="labelStudyGrowth" class="font-weight-boldest"></span></p>
                                </div>
                                <div class="col-xl-4">
                                    <p>Number of Months to Forecast: <span id="labelMonthsForecast" class="font-weight-boldest"></span></p>
                                </div>
                            </div>
                            <!--begin::Example-->
                            <div class="example mb-10">
                                <div class="example-preview">
                                    <table id="resultsTable" class="table table-striped mb-6">
                                        <thead>
                                            <tr>
                                                <th scope="col">Month Year</th>
                                                <th scope="col">Number of Studies</th>
                                                <th scope="col">Cost Forcasted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->