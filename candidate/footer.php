<?php
$aboutUs = $objectJobsDezk->aboutUs();
?>
<footer>
        <div class="main-footer">
            <div class="container">
                <div class="footer">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <a class="logo-main">
                            <img src="../images/logo.jpg" alt="JobsdeZk">
                            </a>
                            <div class="desc"><?= $aboutUs['about'];?></div>
                            <div class="social">
                                <ul class="icon-list">
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Address
                            </div>
                            <div class="link-list">
                                <ul>
                                <?= $aboutUs['address'];?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Companies
                            </div>
                            <div class="link-list">
                                <ul>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="link-header">
                                Companies
                            </div>
                            <div class="link-list">
                                <ul>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                    <li><a href="">Company</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="text-center">2020 All Rights Reserved by JobsdeZk</div>
        </div>
    </footer>