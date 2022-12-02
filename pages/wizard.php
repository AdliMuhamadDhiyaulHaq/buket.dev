<!doctype html>
<html lang="en">

<head>
    <title>jQuery Smart Wizard Bootstrap Modal Demo - The awesome jQuery step wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootrap for the demo page -->
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animate CSS for the css animation support if needed -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

    <!-- Include SmartWizard CSS -->
    <link href="./css/demo.css" rel="stylesheet" type="text/css" />
    <link href="./css/smart_wizard_all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <br>
    <div class="container">

        <div class="fixed-plugin">
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <i class="bi-gear-fill"></i>
            </button>
        </div>

        <div class="mb-5 border-bottom">
            <button class="btn btn-outline-primary btn-sm float-end mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                Settings
            </button>

            <!-- <div class="float-end text-muted me-3 mt-2">
        Step number: <span id="sw-current-step"></span> of <span id="sw-total-step"></span>
      </div> -->

            <h1>jQuery Smart Wizard Bootstrap Modal Demo</h1>
            <div class="mb-2 text-muted">Demo shows jQuery Smart Wizard inside a Bootstrap Modal</div>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Smart Wizard Settings</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <div class="mb-2">
                        <label for="theme_selector" class="form-label">Theme</label>
                        <select id="theme_selector" class="form-select form-select-sm" aria-label="">
                            <option value="basic">Basic (Default)</option>
                            <option value="arrows" selected>Arrows</option>
                            <option value="square">Square</option>
                            <option value="round">Round</option>
                            <option value="dots">Dots</option>
                        </select>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="is_justified" value="1" checked>
                            <label class="form-check-label align-middle" for="is_justified">Justified</label>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="animation" class="form-label">Transition</label>
                        <select id="animation" class="form-select form-select-sm" aria-label="">
                            <optgroup label="Buit-in Animations">
                                <option value="none">None</option>
                                <option value="fade">Fade</option>
                                <option value="slideHorizontal" selected>Slide Horizontal</option>
                                <option value="slideVertical">Slide Vertical</option>
                                <option value="slideSwing">Slide Swing</option>
                            </optgroup>
                            <optgroup label="CSS Animations (External Plugin)">
                                <option value="cssSlideH">Slide Horizontal</option>
                                <option value="cssSlideV">Slide Vertical</option>
                                <option value="cssFade">Fade</option>
                                <option value="cssFadeSlideH">Fade + Slide Horizontal</option>
                                <option value="cssFadeSlideV">Fade + Slide Vertical</option>
                                <option value="cssFadeSlideCorner1">Fade + Slide Corner 1</option>
                                <option value="cssFadeSlideCorner2">Fade + Slide Corner 2</option>
                                <option value="cssBounce">Bounce</option>
                                <option value="cssBounceSlideH">Bounce + Slide Horizontal</option>
                                <option value="cssBounceSlideV">Bounce + Slide Vertical</option>
                                <option value="cssBackSlideH">Back + Slide Horizontal</option>
                                <option value="cssBackSlideV">Back + Slide Vertical</option>
                                <option value="cssFlipH">Flip Horizontal</option>
                                <option value="cssFlipV">Flip Vertical</option>
                                <option value="cssLightspeed">Lightspeed</option>
                                <option value="cssRotate">Rotate</option>
                                <option value="cssRotateClock">Rotate Clockwise</option>
                                <option value="cssRotateAntiClock">Rotate Anti Clockwise</option>
                                <option value="cssZoom">Zoom</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="theme_colors" class="form-label">Colors</label>
                        <select id="theme_colors" class="form-select form-select-sm" aria-label="">
                            <!-- <option value="custom" selected>Custom</option> -->
                        </select>
                    </div>
                    <fieldset class="mb-2" style="display: none;" id="color-list">
                        <!-- <legend class="col-form-label col-sm-2 col-form-label">Colors</legend> -->

                    </fieldset>
                    <!-- </div>
            
            <div class="col"> -->
                    <div class="mb-2">
                        <h6 for="Anchor" class="form-label border-bottom">Anchor Settings</h6>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="anchor_navigation" value="1" checked>
                            <label class="form-check-label align-middle" for="anchor_navigation">Enable Navigation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="enableNavigationAlways" value="1">
                            <label class="form-check-label align-middle" for="enableNavigationAlways">Enable Navigation Always</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="enableDoneState" value="1" checked>
                            <label class="form-check-label align-middle" for="enableDoneState">Enable Done State</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="unDoneOnBackNavigation" value="1">
                            <label class="form-check-label align-middle" for="unDoneOnBackNavigation">Undone On Back Navigation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="enableDoneStateNavigation" value="1" checked>
                            <label class="form-check-label align-middle" for="enableDoneStateNavigation">Enable Done State Navigation</label>
                        </div>
                    </div>

                    <div class="mb-2">
                        <h6 for="Toolbar" class="form-label border-bottom">Toolbar Settings</h6>
                        <label class="form-check-label align-middle-">Position: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="toolbar-position" id="toolbar-position-none" value="none">
                            <label class="form-check-label" for="toolbar-position-none">none</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="toolbar-position" id="toolbar-position-top" value="top">
                            <label class="form-check-label" for="toolbar-position-top">top</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="toolbar-position" id="toolbar-position-bottom" value="bottom">
                            <label class="form-check-label" for="toolbar-position-bottom">bottom</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="toolbar-position" id="toolbar-position-both" value="both" checked>
                            <label class="form-check-label" for="toolbar-position-both">both</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="toolbar-showNextButton" value="1" checked>
                            <label class="form-check-label align-middle" for="toolbar-showNextButton">Show Next Button</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="toolbar-showPreviousButton" value="1" checked>
                            <label class="form-check-label align-middle" for="toolbar-showPreviousButton">Show Previous Button</label>
                        </div>
                    </div>

                    <div class="mb-2">
                        <h6 for="Other" class="form-label border-bottom">Other Settings</h6>
                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="key_navigation" value="1" checked>
                            <label class="form-check-label align-middle" for="key_navigation">Keyboard Navigation</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="back_button_support" value="1" checked>
                            <label class="form-check-label align-middle" for="back_button_support">Back Button Support</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input align-middle option-setting-checkbox" type="checkbox" id="autoAdjustHeight" value="1" checked>
                            <label class="form-check-label align-middle" for="autoAdjustHeight">Auto Adjust Height</label>
                        </div>
                    </div>

                    <div class="mb-2">
                        <h6 for="theme_selector" class="form-label border-bottom">External Controls</h6>
                        <button class="btn btn-secondary btn-sm" id="prev-btn" type="button">Previous</button>
                        <button class="btn btn-secondary btn-sm" id="next-btn" type="button">Next</button>
                        <button class="btn btn-danger btn-sm" id="reset-btn" type="button">Reset</button>

                        <div class="input-group input-group-sm mt-2">
                            <select class="form-select" id="got_to_step" aria-label="Select step number">
                                <option selected>Choose step...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                            <button class="btn btn-primary" id="btn-go-to" type="button">Go</button>
                            <button class="btn btn-warning" id="btn-go-to-forced" type="button">Force Go</button>
                        </div>
                    </div>

                    <div class="mb-2">
                        <h6 for="theme_selector" class="form-label border-bottom">State</h6>
                        <div class="input-group input-group-sm mt-2">
                            <select class="form-select" id="state_step_selection" aria-label="Select step number">
                                <option selected>Choose step...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>

                            <select class="form-select" id="state_selection" aria-label="Select state">
                                <option selected>Choose state...</option>
                                <option value="default">default</option>
                                <option value="active">active</option>
                                <option value="done">done</option>
                                <option value="disable">disable</option>
                                <option value="hidden">hidden</option>
                                <option value="error">error</option>
                                <option value="warning">warning</option>
                            </select>

                            <button class="btn btn-success" id="btn-state-set" type="button">Set</button>
                            <button class="btn btn-danger" id="btn-state-unset" type="button">Unset</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <div class="text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#swModal">
                Click here to launch jQuery Smart Wizard on Bootstrap Modal
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="swModal" tabindex="-1" aria-labelledby="swModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="swModalLabel">Smart Wizard on Bootstrap Modal</h5>

                        <div class="float-end text-muted ms-5">
                            Step number: <span id="sw-current-step"></span> of <span id="sw-total-step"></span>
                        </div>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <!-- SmartWizard html -->
                        <div id="smartwizard">
                            <ul class="nav nav-progress">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-1">
                                        <div class="num">1</div>
                                        TANGGAL EVENT
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num">2</span>
                                        WAKTU EVENT
                                    </a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                    <label for="exampleInputEmail1" class="form-label mt-3">Tanggal Mulai</label>
                                    <input type="date" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Muulai</label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                    <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                            </div>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="prev-btn-modal">Previous</button>
                        <button class="btn btn-primary" id="next-btn-modal">Next</button>
                        <button class="btn btn-success" onclick="onFinish()">Finish</button>
                        <button class="btn btn-secondary" onclick="onCancel()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <br /> &nbsp;
    </div>

    <!-- Bootrap for the demo page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jQuery Slim 3.6  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="./js/jquery.smartWizard.min.js"></script>

    <script type="text/javascript" src="./js/demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function onFinish() {
            alert('Finish Clicked');
        }

        function onCancel() {
            $('#smartwizard').smartWizard("reset");
        }

        $(function() {
            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled').prop('disabled', false);
                $("#next-btn").removeClass('disabled').prop('disabled', false);
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled').prop('disabled', true);
                } else if (stepPosition === 'last') {
                    $("#next-btn").addClass('disabled').prop('disabled', true);
                } else {
                    $("#prev-btn").removeClass('disabled').prop('disabled', false);
                    $("#next-btn").removeClass('disabled').prop('disabled', false);
                }

                // Get step info from Smart Wizard
                let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                $("#sw-current-step").text(stepInfo.currentStep + 1);
                $("#sw-total-step").text(stepInfo.totalSteps);
            });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                // autoAdjustHeight: false,
                theme: 'arrows', // basic, arrows, square, round, dots
                transition: {
                    animation: 'none'
                },
                toolbar: {
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    position: 'none' // none/ top/ both bottom
                },
                anchor: {
                    enableNavigation: true, // Enable/Disable anchor navigation 
                    enableNavigationAlways: false, // Activates all anchors clickable always
                    enableDoneState: true, // Add done state on visited steps
                    markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    unDoneOnBackNavigation: false, // While navigate back, done state will be cleared
                    enableDoneStateNavigation: true // Enable/Disable the done state navigation
                },
                disabledSteps: [], // Array Steps disabled
                errorSteps: [], // Highlight step with errors
                hiddenSteps: []
            });

            $("#prev-btn-modal").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn-modal").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#state_selector").on("change", function() {
                $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

            $("#style_selector").on("change", function() {
                $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

        });
    </script>
</body>

</html>