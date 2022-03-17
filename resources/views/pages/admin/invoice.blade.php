<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('invoice/assets/css/style2.css')}}">
    <title>3D Organs</title>
</head>

<body>
    <section class="content-container">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h3><span>3D+</span> Innovative Solutions</h3>
                        <p class="muted">شركة ثلاثة أبعاد والقيمة المضافة</p>

                    </div>
                    <div>
                        <!-- <p>3Dplus.sa | Info@3Dplus.sa</p>
                    <p>Prince Abdulaziz Ibn Musaid </p>
                    <p>Ibn Jalawi St, St ،Riyadh 12231</p>
                    <p>00 (966) 555855519</p>
                    <p>CR 4030606386</p> -->
                        <p class="muted">3Dplus.sa | <u>Info@3Dplus.sa</u> <br> Prince Abdulaziz Ibn Musaid <br>
                            Ibn Jalawi St, St ،Riyadh 12231 <br>
                            00 (966) 555855519 <br>
                            CR 4030606386
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="side-logo">
                        <img src="{{asset('invoice/assets/logo.svg')}}" alt="">
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Bill To</h4>
                    </div>
                    <div class="text">
                        <p>Shuttle <br>
                            00 (966) 551553442 <br>
                            3685 Riyadh Front, <br>
                            Airport Road, Building S12
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Ship To</h4>
                    </div>
                    <div class="text">
                        <p>Mohammed Alhassan <br>
                            Deliver in Person
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heding">
                        <h4>Dates</h4>
                    </div>
                    <div class="text">
                        <p>Quote: 17-11-2021 <br>
                            Valid for: 15 days</p>

                    </div>
                </div>

            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Deliverable</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price/unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tbox1">
                            <label>Concept Design:</label>
                            <p class="muted"> Ideation: At this stage we will work closely with the
                                client develop the idea of the 3D model. <br>
                                Inspiration: At this stage we forces on the details
                                and the story that the 3D model tells. <br>
                                Sketch: At this stage we draft the first initial drawing
                                of the 3D model</p>
                        </td>
                        <td class=>3D Design</td>
                        <td>1</td>
                        <td>0.00 SR</td>
                    </tr>
                    <tr>

                        <td class="tbox1">
                            <label for="">Manufacturing:</label>
                            <p class="muted">3D CAD: At this stage we transform the 2D sketch to
                                3D digital model.
                                Materials: At this stage we choose the best materials
                                that fits the model. <br>
                                Technology: At this stage we choose the best
                                manufacturing method for the model. <br>
                                Dimensions: At this stage we choose the right
                                dimension for the model which is about 20cm X 12m
                                X 4.5cm once adjusted, the client will be advised.
                                Assembly: At this stage we assemble all the
                                manufactured parts to finalized the model.</p>
                        </td>
                        <td>3D Model</td>
                        <td>50</td>
                        <td> <span>70.00 SR</span>
                            <div class="">
                                <img src="{{asset('invoice/assets/logo.svg')}}" alt="">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="4"></td>
                        <td colspan="2">Total</td>
                        <td>3,500 SR</td>

                    </tr>
                    <tr>
                        <td colspan="2">VAT Rate</td>
                        <td>15%</td>

                    </tr>
                    <tr>
                        <td colspan="2">VAT Amount</td>
                        <td>525 SR</td>
                    </tr>
                    <tr>

                        <td colspan="2">Total Quote</td>
                        <td class="total-amount">4,025 SR</td>
                    </tr>
                </tbody>
            </table>
            <div class="terms">
                <div class="col-md-6 tc">
                    <h4> Terms & Conditions </h4>
                </div>
                <p class="muted">Payment due before delivery, The timeline starts from order confirmation by the customer, and it will
                    be
                    given an estimated day for delivery after design approval.
                    In the concept design phase, the client has the option to add minor modifications to the design
                    twice
                    and once approved no further modification is allowed.
                    These Revisions might impact the delivery date. We quality check every order for errors before it is
                    sent to the customer to assure we haven’t missed anything,
                    If your 3D Model arrives and you notice any quality issues, product errors, or order mistakes, let
                    us
                    know within 5 business days of delivery. Email Info@3dplus.sa to alert us of any issue. If it is our
                    fault, we will take full responsibility and will refund or replace your goods. The information
                    contained
                    or referred to in the
                    Quotation documents is confidential and must not be disclosed or released for any other use or
                    purpose.
                </p>

            </div>
        </div>
    </section>
    <img src="{{asset('invoice/assets/Quotation.png')}}" class="side-imag" alt="top">



    <section class="footer-wrap">
        <footer>
            <div class="col-md-12">
                <img src="{{asset('invoice/assets/Quotation2.png')}}" class="footer-img" alt="">
            </div>
        </footer>

    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{asset('invoice/assets/js/jquery.min.js')}}"></script>
</body>

</html>