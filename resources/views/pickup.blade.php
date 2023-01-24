@extends('master.template')

@section('title', 'pickup')

@section('body')

<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">  
    <p class="m-4">Order Book Summary</p>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="card mb-3 mt-4 w-75">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Book title</h5>
                        <p class="card-text">ISBN</p>
                        <small class="text-muted">Borrow date:</small>
                        <br>
                        <small class="text-muted">Return date:</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="m-4">
            <p>Choose pick-up method</p>
            <div>
                <input type="radio" onclick="javascript:pickupCheck();" class="btn-check" name="options" id="self" autocomplete="off">
                <label class="btn btn-outline-secondary" for="self">Self Pick-Up</label>
                
                <input type="radio" onclick="javascript:pickupCheck();" class="btn-check" name="options" id="courier" autocomplete="off">
                <label class="btn btn-outline-secondary" for="courier">Courier Pick-Up</label>
                <br>
                <br>
                <div id="ifSelf" style="display:none">
                Please pick-up the book within 24 hour.
                <br>
                The Library Address is as below:
                </div>
                <div id="ifCourier" style="display:none">
                Choose your Courier
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="JNE" id="JNE">
                        <label class="form-check-label" for="JNE">
                            JNE express
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Gojek" id="Gojek">
                        <label class="form-check-label" for="Gojek">
                            Gojek instant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Grab" id="Grab">
                        <label class="form-check-label" for="Grab">
                            Grab instant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Cepat" id="Cepat">
                        <label class="form-check-label" for="Cepat">
                            Si Cepat
                        </label>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function pickupCheck() {
        if (document.getElementById('self').checked) {
            document.getElementById('ifSelf').style.display = 'block';
        } else{
            document.getElementById('ifSelf').style.display = 'none';
        }

        if (document.getElementById('courier').checked) {
            document.getElementById('ifCourier').style.display = 'block';
        } else{
            document.getElementById('ifCourier').style.display = 'none';
        }
    }
</script>

@endsection
