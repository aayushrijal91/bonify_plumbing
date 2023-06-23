<header class="bg-dark">
    <div class="container py-5">
        <div class="flex flex-wrap justify-between items-center gap-y-7">
            <div class="w-1/2 lg:w-fit px-5 md:px-0"><a href="./"><?= renderImg('logo.png', 'logo') ?></a></div>
            <div class="w-1/2 lg:w-fit flex items-center justify-end px-5 md:px-1">
                <div class="relative w-[20px]">
                    <div class="pulse pulsating-circle"></div>
                </div>
                <div class="text-white text-base md:text-xl font-bold">Operating 24/7</div>
            </div>
            <div class="w-full lg:w-fit flex flex-wrap items-center xl:-mx-2">
                <div class="w-1/2 lg:w-fit px-2">
                    <a href="tel:<?= $phone_number ?>" class="text-white text-lg md:text-xl font-medium font-poppins flex items-center justify-center gap-x-2">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.2542 11.874 13.0664 11.8667 12.8868 11.909C12.7072 11.9513 12.5424 12.0415 12.41 12.17L10.21 14.37C7.37119 12.9262 5.06378 10.6188 3.62 7.78L5.82 5.57C5.95245 5.44434 6.04632 5.28352 6.0906 5.1064C6.13488 4.92928 6.12773 4.7432 6.07 4.57C5.69065 3.41806 5.49821 2.2128 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM16 9H18C18 6.61305 17.0518 4.32387 15.364 2.63604C13.6761 0.948211 11.3869 0 9 0V2C12.87 2 16 5.13 16 9ZM12 9H14C14 6.24 11.76 4 9 4V6C10.66 6 12 7.34 12 9Z" fill="#C62026" />
                        </svg>

                        <?= $phone_number ?>
                    </a>
                </div>
                <div class="w-1/2 lg:w-fit px-2">
                    <a href="#form" class="boldBtn w-full">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="bg-dark px-2 md:px-5">
    <div class="banner rounded-2xl max-w-[1800px] h-[750px] md:h-[800px] mx-auto">
        <div class="container h-full">
            <div class="flex justify-center lg:justify-start md:items-center h-full">
                <div class="w-10/12 lg:w-2/3 xl:w-1/2 py-10">
                    <div class="rounded-full bg-white inline-flex px-5 py-4 gap-x-3">
                        <div><?= renderImg('google.png', 'icons') ?></div>
                        <div>
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0L15.3856 7.34006L23.4127 8.2918L17.4781 13.7799L19.0534 21.7082L12 17.76L4.94658 21.7082L6.52191 13.7799L0.587322 8.2918L8.61436 7.34006L12 0Z" fill="#FF9900" />
                            </svg>
                        </div>
                        <div class="text-base md:text-xl font-poppins font-semibold">5 Star Google Reviews</div>
                    </div>
                    <div class="text-4xl md:text-6xl text-white font-bold pt-10 text-center md:text-start">
                        Reliable Plumbers that always put the <span class="text-primary">Customer First</span>
                    </div>
                    <div class="text-white py-7 md:py-12 text-xl md:text-2xl font-bold text-center md:text-start">Melbourne's most trusted Plumbing Specialists</div>
                    <ul class="bannerList text-white font-poppins font-medium text-lg md:text-xl pl-6 flex flex-col items-center md:items-start gap-y-2 text-center md:text-start">
                        <li>Family owned and operated</li>
                        <li>High experienced and trustworthy plumbers</li>
                        <li>Affordable Rates</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="logo_slider flex justify-between items-center md:-mx-2">
            <div class="px-2"><?= renderImg('rheem.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('rinnai.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('everdure.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('paloma.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('thermann.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('bosch.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('stiebel_eltron.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('reece.png', 'logo') ?></div>
            <div class="px-2"><?= renderImg('dux.png', 'logo') ?></div>
        </div>
    </div>

    <div class="container py-16 md:py-36">
        <div class="flex flex-wrap -mx-2 gap-y-5">
            <div class="w-full md:w-1/2 xl:w-7/12 px-2">
                <div class="bg-[url('../images/background/cta_left.jpg')] bg-no-repeat bg-cover h-[348px] md:h-[450px] lg:h-[600px] w-full rounded-2xl p-10 xl:p-[60px] flex items-end">
                    <div>
                        <div class="text-white text-3xl lg:text-5xl font-bold leading-tight pb-10 md:pb-12">24 Hour Emergency Response</div>
                        <a href="#form" class="boldBtn">Enquire</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-5/12 px-2">
                <div class="bg-[url('../images/background/cta_right.jpg')] bg-no-repeat bg-contain md:bg-cover bg-center h-[348px] md:h-[450px] lg:h-[600px] w-full rounded-2xl flex items-end overflow-hidden">
                    <div>
                        <?= renderImg('reverse-vector.png', 'background', 'w-full') ?>
                        <div class="bg-primary p-10 pt-0 xl:p-[60px] lg:pt-0 text-white text-2xl lg:text-4xl font-bold leading-tight text-center">Same Day Services or we give you $50 Off</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="heroForm py-16 md:py-36">
    <div class="container">
        <div class="flex flex-wrap gap-y-5 lg:-mx-2">
            <div class="w-full lg:w-1/2 px-2 h-inherit">
                <?= renderImg('form.jpg', 'lib', 'rounded-2xl w-full h-full') ?>
            </div>
            <div class="w-full lg:w-1/2 px-2 h-inherit">
                <form action="./src/form.php" class="form rounded-2xl bg-white h-full w-full p-10 md:px-20 lg:px-10 xl:px-20 md:py-[60px] flex flex-col items-center" id="heroForm" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />
                    <div class="text-center text-3xl md:text-5xl font-bold"><span class="text-primary">Schedule</span> With Bonify Today</div>
                    <div class="py-10 md:py-16 w-full flex flex-col gap-y-10">
                        <div class="form-control">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00002 6.66667C9.84097 6.66667 11.3334 5.17428 11.3334 3.33333C11.3334 1.49238 9.84097 0 8.00002 0C6.15907 0 4.66669 1.49238 4.66669 3.33333C4.66669 5.17428 6.15907 6.66667 8.00002 6.66667Z" fill="currentColor" />
                                    <path d="M1.33335 16H14.6667C14.8435 16 15.0131 15.9298 15.1381 15.8047C15.2631 15.6797 15.3334 15.5101 15.3334 15.3333C15.3334 13.3884 14.5607 11.5232 13.1855 10.1479C11.8102 8.77262 9.94494 8 8.00002 8C6.0551 8 4.18984 8.77262 2.81457 10.1479C1.4393 11.5232 0.666687 13.3884 0.666687 15.3333C0.666687 15.5101 0.736925 15.6797 0.861949 15.8047C0.986973 15.9298 1.15654 16 1.33335 16Z" fill="currentColor" />
                                </svg>
                            </div>

                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-control">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1111 11.1111C14 11.1111 12.9333 10.9333 11.9378 10.6044C11.7815 10.5547 11.6146 10.5482 11.455 10.5858C11.2953 10.6234 11.1488 10.7035 11.0311 10.8178L9.07556 12.7733C6.55217 11.49 4.50114 9.43894 3.21778 6.91556L5.17333 4.95111C5.29106 4.83941 5.3745 4.69646 5.41386 4.53902C5.45322 4.38158 5.44687 4.21618 5.39556 4.06222C5.05836 3.03827 4.8873 1.96693 4.88889 0.888889C4.88889 0.4 4.48889 0 4 0H0.888889C0.4 0 0 0.4 0 0.888889C0 9.23556 6.76444 16 15.1111 16C15.6 16 16 15.6 16 15.1111V12C16 11.5111 15.6 11.1111 15.1111 11.1111ZM14.2222 8H16C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0V1.77778C11.44 1.77778 14.2222 4.56 14.2222 8ZM10.6667 8H12.4444C12.4444 5.54667 10.4533 3.55556 8 3.55556V5.33333C9.47556 5.33333 10.6667 6.52444 10.6667 8Z" fill="currentColor" />
                                </svg>
                            </div>

                            <input type="tel" name="phone" placeholder="Number" required>
                        </div>
                        <div class="form-control">
                            <div class="icon">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0.75H14C14.3977 0.750397 14.779 0.90856 15.0602 1.18978C15.3414 1.471 15.4996 1.8523 15.5 2.25V3.5C15.5 3.54473 15.488 3.58864 15.4653 3.62716C15.4426 3.66568 15.4099 3.6974 15.3708 3.719L8.12075 7.719C8.08377 7.7394 8.04223 7.75009 8 7.75009C7.95777 7.75009 7.91623 7.7394 7.87925 7.719L0.62925 3.719C0.590085 3.6974 0.557434 3.66568 0.5347 3.62716C0.511966 3.58864 0.499983 3.54473 0.5 3.5V2.25C0.500397 1.8523 0.65856 1.471 0.939778 1.18978C1.221 0.90856 1.6023 0.750397 2 0.75ZM7.99988 8.49927C8.16891 8.49927 8.3352 8.45649 8.48325 8.3749L15.5 4.50415V11.7499C15.4996 12.1476 15.3414 12.5289 15.0602 12.8101C14.779 13.0913 14.3977 13.2495 14 13.2499H2C1.6023 13.2495 1.221 13.0913 0.939778 12.8101C0.65856 12.5289 0.500397 12.1476 0.5 11.7499V4.50415L7.5165 8.3749C7.66455 8.45649 7.83084 8.49927 7.99988 8.49927Z" fill="currentColor" />
                                </svg>
                            </div>

                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-control">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.298 13.3829L15.943 10.6171C16.0487 10.4457 16.0017 10.2286 15.849 10.1029L14.11 8.77714C14.1452 8.52571 14.1687 8.26286 14.1687 8C14.1687 7.73714 14.1452 7.47429 14.11 7.21143L15.849 5.88571C16.0017 5.76 16.0487 5.54286 15.943 5.37143L14.298 2.60571C14.248 2.52389 14.1699 2.46184 14.0775 2.43049C13.985 2.39913 13.8842 2.40048 13.7927 2.43429L11.7482 3.23429C11.3252 2.91429 10.867 2.65143 10.3617 2.44571L10.0562 0.331429C10.0365 0.238997 9.98507 0.155835 9.91034 0.0956064C9.83561 0.0353774 9.74203 0.00166247 9.64499 0H6.35501C6.15526 0 5.97901 0.148571 5.94376 0.342857L5.63826 2.45714C5.14476 2.66286 4.67476 2.92571 4.25177 3.24571L2.20727 2.44571C2.01927 2.37714 1.80778 2.44571 1.70203 2.61714L0.0570325 5.38286C-0.0487171 5.55429 -0.00171709 5.77143 0.151032 5.89714L1.89002 7.22286C1.85477 7.47429 1.83128 7.73714 1.83128 8C1.83128 8.26286 1.85477 8.52571 1.89002 8.78857L0.151032 10.1143C-0.00171709 10.24 -0.0487171 10.4571 0.0570325 10.6286L1.70203 13.3943C1.80778 13.5657 2.01927 13.6343 2.20727 13.5657L4.25177 12.7657C4.67476 13.0857 5.13301 13.3486 5.63826 13.5543L5.94376 15.6686C5.97901 15.8514 6.15526 16 6.35501 16H9.64499C9.84474 16 10.021 15.8514 10.0562 15.6571L10.3617 13.5429C10.8552 13.3371 11.3252 13.0743 11.7482 12.7543L13.7927 13.5543C13.9807 13.6229 14.1922 13.5543 14.298 13.3829ZM8 10.2857C6.70751 10.2857 5.65001 9.25714 5.65001 8C5.65001 6.74286 6.70751 5.71429 8 5.71429C9.29249 5.71429 10.35 6.74286 10.35 8C10.35 9.25714 9.29249 10.2857 8 10.2857Z" fill="currentColor" />
                                </svg>
                            </div>

                            <select name="service" required>
                                <option selected disabled>Select Services</option>
                                <option>Emergency Plumbing</option>
                                <option>Blocked Drains</option>
                                <option>Hot Water Service</option>
                                <option>Toilet Repairs</option>
                                <option>Burst Pipes</option>
                                <option>Tap Repairs</option>
                                <option>Gas Fittings & Repairs</option>
                                <option>Gas Installation</option>
                                <option>Strata & Real Estate Plumbing</option>
                                <option>Leaking Taps & Toilets</option>
                                <option>Pipe Relining</option>
                                <option>Bathroom Renovations</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="boldBtn">Book Now</button>
                    <div class="text-center text-base md:text-lg text-grey pt-5">Unsure of anything? Give us a <a href="tel:<?= $phone_number ?>" class="text-primary font-bold">call</a></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="about py-16 md:py-36 bg-light-grey">
    <div class="container">
        <div class="about_wrapper rounded-2xl lg:h-[600px] flex flex-wrap overflow-hidden items-end">
            <div class="w-full md:w-1/2 flex items-center justify-center h-full text-center">
                <div class="w-11/12 md:w-11/12 xl:w-9/12 py-10">
                    <div class="text-white text-3xl md:text-5xl font-bold">Why choose <span class="text-primary">Bonify?</span></div>
                    <div class="text-white text-base lg:text-xl py-10 md:py-12">
                        If you're sick and tired of dealing with unreliable and big plumbing companies who don’t put you first, look no further. We guarantee to be the only plumbing company you will ever need. We will go above and beyond to give the highest quality and care for the task at hand.
                    </div>
                    <div class="flex justify-center md:-mx-2">
                        <div class="px-2">
                            <a href="#form" class="boldBtn">Book Now</a>
                        </div>
                        <div class="px-2">
                            <a href="#form" class="borderBtn border-white text-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 h-inherit">
                <?= renderImg('about_guy.png', 'lib', 'w-full') ?>
            </div>
        </div>

        <div class="flex flex-wrap mt-12 lg:-mx-2 gap-y-5">
            <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                <div class="about_card">
                    <div class="w-[86px] h-[85px]">
                        <svg width="86" height="85" viewBox="0 0 86 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M54.4839 77.6121L78.1121 53.9839C78.7699 53.3261 79.2917 52.5452 79.6476 51.6858C80.0036 50.8264 80.1869 49.9053 80.1869 48.975C80.1869 48.0448 80.0036 47.1237 79.6476 46.2643C79.2917 45.4049 78.7699 44.624 78.1121 43.9662L39.4583 5.3125H5.8125V38.9583L44.4662 77.6121C45.124 78.2699 45.9049 78.7917 46.7643 79.1476C47.6237 79.5036 48.5448 79.6869 49.475 79.6869C50.4053 79.6869 51.3264 79.5036 52.1858 79.1476C53.0452 78.7917 53.8261 78.2699 54.4839 77.6121Z" stroke="#C62026" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M25.2916 31.8752C29.2037 31.8752 32.375 28.7038 32.375 24.7918C32.375 20.8798 29.2037 17.7085 25.2916 17.7085C21.3796 17.7085 18.2083 20.8798 18.2083 24.7918C18.2083 28.7038 21.3796 31.8752 25.2916 31.8752Z" stroke="#C62026" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="text-xl md:text-2xl md:text-center font-bold">We offer Upfront Pricing, no extra costs</div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                <div class="about_card">
                    <div class="w-[86px] h-[85px]">
                        <?= renderImg('on-the-spot.png', 'icons', 'w-[86px]') ?>
                    </div>

                    <div class="text-xl md:text-2xl md:text-center font-bold">On the spot Emergency Repairs</div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                <div class="about_card">
                    <div class="w-[86px] h-[85px]">
                        <svg width="86" height="85" viewBox="0 0 86 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.8316 34.1577C40.8316 35.7577 40.4796 37.2137 39.7756 38.5257C39.1036 39.8377 38.1436 40.8777 36.8956 41.6457C35.6476 42.4137 34.2236 42.7977 32.6236 42.7977C31.0556 42.7977 29.6476 42.4297 28.3996 41.6937C27.1836 40.9257 26.2236 39.8857 25.5196 38.5737C24.8476 37.2617 24.5116 35.8217 24.5116 34.2537C24.5116 32.6537 24.8476 31.1977 25.5196 29.8857C26.2236 28.5737 27.1996 27.5337 28.4476 26.7657C29.6956 25.9977 31.1196 25.6137 32.7196 25.6137C34.2876 25.6137 35.6796 25.9977 36.8956 26.7657C38.1436 27.5017 39.1036 28.5257 39.7756 29.8377C40.4796 31.1497 40.8316 32.5897 40.8316 34.1577ZM27.8716 59.5977L52.3996 25.9977H58.1116L33.5836 59.5977H27.8716ZM35.7916 34.2537C35.7916 33.0697 35.4876 32.0617 34.8796 31.2297C34.3036 30.3977 33.5516 29.9817 32.6236 29.9817C31.6636 29.9817 30.9116 30.3817 30.3676 31.1817C29.8236 31.9817 29.5516 32.9737 29.5516 34.1577C29.5516 35.3417 29.8396 36.3497 30.4156 37.1817C31.0236 38.0137 31.7916 38.4297 32.7196 38.4297C33.6796 38.4297 34.4316 38.0297 34.9756 37.2297C35.5196 36.4297 35.7916 35.4377 35.7916 34.2537ZM61.4716 51.3417C61.4716 52.9417 61.1196 54.3977 60.4156 55.7097C59.7436 57.0217 58.7836 58.0617 57.5356 58.8297C56.2876 59.5977 54.8636 59.9817 53.2636 59.9817C51.6956 59.9817 50.2876 59.6137 49.0396 58.8777C47.8236 58.1097 46.8636 57.0697 46.1596 55.7577C45.4876 54.4457 45.1516 53.0057 45.1516 51.4377C45.1516 49.8377 45.4876 48.3817 46.1596 47.0697C46.8636 45.7577 47.8396 44.7177 49.0876 43.9497C50.3356 43.1817 51.7596 42.7977 53.3596 42.7977C54.9276 42.7977 56.3196 43.1817 57.5356 43.9497C58.7836 44.6857 59.7436 45.7097 60.4156 47.0217C61.1196 48.3337 61.4716 49.7737 61.4716 51.3417ZM56.4316 51.4377C56.4316 50.2537 56.1276 49.2457 55.5196 48.4137C54.9436 47.5817 54.1916 47.1657 53.2636 47.1657C52.3036 47.1657 51.5516 47.5657 51.0076 48.3657C50.4636 49.1657 50.1916 50.1577 50.1916 51.3417C50.1916 52.5257 50.4796 53.5337 51.0556 54.3657C51.6636 55.1977 52.4316 55.6137 53.3596 55.6137C54.3196 55.6137 55.0716 55.2137 55.6156 54.4137C56.1596 53.6137 56.4316 52.6217 56.4316 51.4377Z" fill="#C62026" />
                            <path d="M49.197 8.67038L53.6459 4.97135L55.4973 10.401L56.2059 12.4792L58.2091 11.5803L63.498 9.20687L63.7976 14.912L63.9135 17.117L66.0963 16.7843L71.8239 15.9112L70.5588 21.4686L70.0656 23.6351L72.2719 23.8984L78.0085 24.583L75.2787 29.587L74.2091 31.5477L76.2755 32.3952L81.5974 34.578L77.6049 38.6664L76.0406 40.2684L77.8082 41.6427L82.3285 45.1571L77.3624 48.0326L75.4263 49.1536L76.7564 50.9524L80.1485 55.5403L74.5681 56.9884L72.4112 57.5481L73.1999 59.6322L75.2165 64.9613L69.4303 64.8674L67.2155 64.8314L67.4051 67.0384L67.8935 72.7221L62.3324 71.0842L60.2207 70.4623L59.8036 72.6238L58.7191 78.2441L53.8032 75.179L51.9438 74.0196L50.9586 75.9769L48.3733 81.1131L44.4761 76.8505L43 75.236L41.5239 76.8505L37.6267 81.1131L35.0414 75.9769L34.0562 74.0196L32.1968 75.179L27.2809 78.2441L26.1964 72.6238L25.7793 70.4623L23.6676 71.0842L18.1065 72.7221L18.5949 67.0384L18.7845 64.8314L16.5697 64.8674L10.7835 64.9613L12.8001 59.6322L13.5888 57.5481L11.4319 56.9884L5.85147 55.5403L9.24365 50.9524L10.5737 49.1536L8.63765 48.0326L3.67152 45.1571L8.19179 41.6427L9.95945 40.2684L8.39512 38.6664L4.40263 34.578L9.72448 32.3952L11.7909 31.5477L10.7213 29.587L7.99153 24.583L13.7281 23.8984L15.9344 23.6351L15.4412 21.4686L14.1761 15.9112L19.9037 16.7843L22.0865 17.117L22.2024 14.912L22.502 9.20687L27.7909 11.5803L29.7941 12.4792L30.5027 10.401L32.3541 4.97135L36.803 8.67038L38.4858 10.0695L39.7282 8.26788L43 3.52309L46.2718 8.26788L47.5142 10.0695L49.197 8.67038Z" stroke="#C62026" stroke-width="4" />
                        </svg>
                    </div>

                    <div class="text-xl md:text-2xl md:text-center font-bold">Discounts for Seniors & New Customers</div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                <div class="about_card">
                    <div class="w-[85px] h-[85px]">
                        <svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.34082 0H79.6592C81.1291 0 82.4651 0.926867 83.4313 2.41335C84.3975 3.90118 85 5.95535 85 8.21669V76.7793C85 79.0446 84.3975 81.1002 83.4313 82.5866C82.4651 84.0745 81.1291 85 79.6592 85H5.34082C3.87096 85 2.53489 84.0731 1.56606 82.5866C0.599849 81.1002 0 79.0446 0 76.7793V8.21804C0 5.9567 0.599849 3.90118 1.56606 2.4147C2.53489 0.928212 3.87096 0.00134523 5.34082 0.00134523V0ZM79.6592 4.40026H5.34082C4.65966 4.40026 4.03971 4.83074 3.59115 5.52488C3.13996 6.21902 2.86015 7.17279 2.86015 8.21669V76.7793C2.86015 77.8272 3.13996 78.781 3.59115 79.4751C4.03971 80.1652 4.65966 80.5957 5.34082 80.5957H79.6592C80.3386 80.5957 80.9603 80.1652 81.4089 79.4751C81.8601 78.781 82.1399 77.8272 82.1399 76.7793V8.21804C82.1399 7.17279 81.8601 6.21633 81.4089 5.52622C80.9603 4.83208 80.3378 4.40161 79.6592 4.40161V4.40026Z" fill="#C62026" />
                            <path d="M48.7291 53C47.9558 53 47.3296 52.1032 47.3296 50.9988C47.3296 49.8943 47.9549 49 48.7291 49H73.9414C74.7148 49 75.341 49.8968 75.341 50.9988C75.341 52.1008 74.7156 53 73.9414 53H48.7291Z" fill="#C62026" />
                            <path d="M48.7163 37C47.95 37 47.3296 35.8784 47.3296 34.5C47.3296 33.1216 47.9492 32 48.7163 32H62.3634C63.1296 32 63.75 33.1171 63.75 34.5C63.75 35.8829 63.1305 37 62.3634 37H48.7163Z" fill="#C62026" />
                            <path d="M48.7291 69C47.9558 69 47.3296 68.1027 47.3296 67C47.3296 65.8973 47.9549 65 48.7291 65H73.9414C74.7148 65 75.341 65.8936 75.341 67C75.341 68.1064 74.7156 69 73.9414 69H48.7291Z" fill="#C62026" />
                            <path d="M11.0734 21C10.2919 21 9.65906 19.8829 9.65906 18.5C9.65906 17.1171 10.291 16 11.0734 16H73.9265C74.7081 16 75.3409 17.1216 75.3409 18.5C75.3409 19.8784 74.7089 21 73.9265 21H11.0734Z" fill="#C62026" />
                            <path d="M25.5987 52.5346C21.8305 52.5346 18.424 54.1788 15.962 56.8341C13.8606 59.1059 12.4443 62.1133 12.0697 65.4665H39.1276C38.756 62.1101 37.3387 59.1037 35.2403 56.8406L35.2323 56.8341C32.7733 54.1788 29.3668 52.5346 25.5987 52.5346ZM13.6483 54.3408C16.7122 51.0428 20.9371 49 25.5987 49C30.2602 49 34.4801 51.0395 37.54 54.3376L37.546 54.3441C40.61 57.6508 42.5001 62.2073 42.5001 67.2327C42.5001 68.206 41.7679 69 40.8614 69H10.3339C9.42843 69 8.69324 68.2071 8.69324 67.2327C8.69324 62.1987 10.5873 57.6389 13.6473 54.3408H13.6483Z" fill="#C62026" />
                            <path d="M25.5966 35.4666C23.7222 35.4666 22.0218 36.2572 20.7943 37.5279L20.7135 37.6064C19.5321 38.8686 18.8042 40.595 18.8042 42.5005C18.8042 44.4061 19.5648 46.2014 20.7954 47.4721C22.0228 48.7459 23.7232 49.5334 25.5977 49.5334C27.4721 49.5334 29.1756 48.7491 30.4 47.4816C31.6305 46.2014 32.3911 44.4442 32.3911 42.5005C32.3911 40.5569 31.6335 38.7965 30.4092 37.529L30.401 37.5226C29.1766 36.2519 27.4793 35.4677 25.5987 35.4677L25.5966 35.4666ZM18.4265 35.0766C20.26 33.1753 22.7967 32 25.5966 32C28.3965 32 30.919 33.1743 32.7586 35.0734L32.7648 35.0798C34.6044 36.9874 35.7387 39.6104 35.7387 42.5005C35.7387 45.3906 34.6044 48.0253 32.7668 49.9266C30.9272 51.8247 28.3904 53 25.5966 53C22.8029 53 20.26 51.8257 18.4265 49.9266C16.593 48.0274 15.4546 45.3991 15.4546 42.5005C15.4546 39.602 16.5489 37.0807 18.3272 35.1858L18.4254 35.0777L18.4265 35.0766Z" fill="#C62026" />
                        </svg>
                    </div>

                    <div class="text-xl md:text-2xl md:text-center font-bold">Licensed & Experienced Plumbers</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-36">
    <div class="container">
        <div class="flex flex-wrap lg:-mx-2 gap-y-5 justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="rounded-2xl h-[430px] lg:h-[520px] bg-[url('../images/background/blocked-drains.jpg')] bg-no-repeat bg-cover overflow-hidden">
                    <div class="bg-primary w-full text-white p-10 xl:p-[60px] pb-0 xl:pb-0">
                        <div class="text-xl md:text-2xl font-bold">Blocked Drains from</div>
                        <div class="text-5xl font-bold">$69</div>
                    </div>
                    <?= renderImg('vector.png', 'background', 'w-full') ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="rounded-2xl h-[430px] lg:h-[520px] bg-[url('../images/background/tap-repairs.jpg')] bg-no-repeat bg-cover overflow-hidden">
                    <div class="bg-primary w-full text-white p-10 xl:p-[60px] pb-0 xl:pb-0">
                        <div class="text-xl md:text-2xl font-bold">Tap Repairs from</div>
                        <div class="text-5xl font-bold">$79</div>
                    </div>
                    <?= renderImg('vector.png', 'background', 'w-full') ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <div class="rounded-2xl h-[430px] lg:h-[520px] bg-[url('../images/background/free.jpg')] bg-no-repeat bg-cover overflow-hidden">
                    <div class="bg-primary w-full text-white p-10 xl:p-[60px] pb-0 xl:pb-0">
                        <div class="text-5xl font-bold">Free</div>
                        <div class="text-xl md:text-2xl font-bold">Home Inspection with any service valued at over $150</div>
                    </div>
                    <?= renderImg('vector.png', 'background', 'w-full') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service h-[900px] bg-[url('../images/background/service_sm.jpg')] md:bg-[url('../images/background/service.jpg')] bg-no-repeat bg-cover">
    <div class="container text-center text-white py-10 xl:py-36">
        <div class="flex flex-wrap justify-center items-center">
            <div class="w-10/12 xl:w-1/2 flex flex-col items-center">
                <svg width="44" height="90" viewBox="0 0 44 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.535 90C11.8247 65.5911 36.6537 57.235 43.8766 30.12L37.832 19.2954C23.6309 53.7852 5.29039 55.4488 11.9395 80.8083C13.1255 85.1703 15.88 87.4088 18.535 90Z" fill="#C62026" />
                    <path d="M34.6109 13.6303L26.9977 0C16.7524 34.2598 4.22702 34.9268 0.76856 52.6509C-1.06779 62.0725 2.04635 68.1977 6.96623 74.9209C5.40534 45.0001 23.5622 46.2573 34.6109 13.6303Z" fill="white" />
                </svg>

                <div class="text-4xl xl:text-6xl font-bold pt-10 pb-8 xl:py-12">Bonify Services</div>
                <div class="text-lg lg:text-xl">Our highly experienced and professional team can do it all. No job is either too small or too big for our team</div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-grey pb-16 md:pb-36">
    <div class="container">
        <?php
        $services = [
            [
                'title' => 'Emergency Plumbing',
                'description' => 'Bonify Plumbing in Melbourne provides reliable emergency plumbing services, ensuring prompt response and swift resolution for unexpected plumbing emergencies.',
            ],
            [
                'title' => 'Blocked Drains',
                'description' => 'Bonify Plumbing specializes in clearing blocked drains with precision, utilizing advanced techniques and equipment to restore proper drainage efficiently and effectively.',
            ],
            [
                'title' => 'Hot Water Service',
                'description' => 'Bonify Plumbing offers expert hot water repair services in Melbourne, ensuring your system is promptly fixed to restore your comfort and convenience.'
            ],
            [
                'title' => 'Toilet Repairs',
                'description' => "Bonify Plumbing's skilled team in Melbourne handles toilet repairs promptly and efficiently, resolving issues such as leaks, blockages, and malfunctioning components."
            ],
            [
                'title' => 'Burst Pipes',
                'description' => 'Bonify Plumbing is your trusted partner in Melbourne for burst pipe emergencies, responding swiftly to prevent further damage and providing expert repairs to restore your plumbing system.'
            ],
            [
                'title' => 'Tap Repairs',
                'description' => "Bonify Plumbing's experienced technicians in Melbourne specialize in tap repairs, ensuring your taps function properly and efficiently while addressing any leaks or faults."
            ],
            [
                'title' => 'Gas Fittings & Repairs',
                'description' => "Bonify Plumbing offers comprehensive gas fittings and repair services in Melbourne, ensuring safety and reliability for your gas appliances and systems."
            ],
            [
                'title' => 'Gas Installation',
                'description' => "Bonify Plumbing provides professional gas installation services in Melbourne, ensuring precise and compliant installations for residential and commercial properties."
            ],
            [
                'title' => 'Strata & Real Estate Plumbing',
                'description' => "Bonify Plumbing caters to the unique plumbing needs of strata and real estate properties in Melbourne, offering reliable maintenance, repairs, and plumbing solutions."
            ],
            [
                'title' => 'Leaking Taps & Toilets',
                'description' => "Bonify Plumbing efficiently addresses leaking taps and toilets in Melbourne, providing prompt repairs to conserve water and prevent further damage."
            ],
            [
                'title' => 'Pipe Relining',
                'description' => "Bonify Plumbing specializes in pipe relining services, using innovative techniques to repair and strengthen damaged pipes without the need for extensive excavation."
            ],
            [
                'title' => 'Bathroom Renovations',
                'description' => "Bonify Plumbing offers comprehensive bathroom renovation services in Melbourne, providing expert plumbing installations and ensuring your vision for a modern and functional bathroom is realized."
            ],
        ]
        ?>
        <div class="flex flex-wrap gap-y-5 lg:-mx-2">
            <?php foreach ($services as $index => $service) : ?>
                <div class="w-full md:w-1/2 lg:w-1/3 h-inherit px-2">
                    <div class="bg-white rounded-2xl drop-shadow-md overflow-hidden h-full flex flex-col hover:scale-[1.02] transition-all duration-150">
                        <div class="h-[200px]"><?= renderImg('service-' . ($index + 1) . '.jpg', 'lib', 'w-full h-full') ?></div>
                        <div class="p-10 lg:p-8 xl:p-[60px] flex-1 flex flex-col justify-between items-start">
                            <div class="flex-1">
                                <div class="text-dark text-xl md:text-2xl font-bold"><?= $service['title'] ?></div>
                                <div class="text-grey text-base xl:text-xl py-7"><?= $service['description'] ?></div>
                            </div>
                            <a href="#" class="borderBtn hover:bg-primary border-grey hover:border-primary text-grey hover:text-white transition-all duration-150">Enquire</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="about py-16 md:py-36">
    <div class="container">
        <div class="about_wrapper rounded-2xl lg:h-[600px] flex flex-wrap items-end overflow-hidden">
            <div class="w-full md:w-1/2 flex items-center justify-center h-full text-center">
                <div class="w-10/12 xl:w-9/12 py-10">
                    <div class="text-white text-3xl md:text-5xl font-bold">What do <span class="text-primary">we do?</span></div>
                    <div class="text-white text-base lg:text-xl pt-10 md:pt-12">
                        Bonify Plumbing and Maintenance is a family-owned company unlike our competitors, so you know that you’re getting a reputable and professional local Melbourne plumbing and maintenance company offering quality and precise emergency plumbing works. Bonify Plumbing and Maintenance is reliable and focused on customer satisfaction from the beginning to the end. We operate 24/7 so we can always be there when you need a trustworthy plumber to get you out of trouble!
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 h-inherit">
                <?= renderImg('what-do-we-do-guy.png', 'lib', 'w-full') ?>
            </div>
        </div>
    </div>
    <div class="gallery mt-12">
        <div><?= renderImg('gallery-1.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-2.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-3.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-4.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-5.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-6.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-7.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-8.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-9.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-10.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-11.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-12.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-13.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-14.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-15.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-16.jpg', 'lib', 'w-full h-full') ?></div>
        <div><?= renderImg('gallery-17.jpg', 'lib', 'w-full h-full') ?></div>
    </div>
</section>

<footer class="bg-dark py-10 md:py-5">
    <div class="container">
        <div class="flex flex-wrap justify-center lg:justify-between items-center gap-y-14">
            <div class="lg:hidden"><a href="./"><?= renderImg('footer_logo_sm.png', 'logo') ?></a></div>
            <div class="hidden lg:block"><a href="./"><?= renderImg('logo.png', 'logo') ?></a></div>
            <div class="w-full lg:hidden text-[#DADADA] text-sm text-center flex flex-col gap-y-5">
                <div>Copyright <?= date('Y') ?></div>
                <div><?= $site ?></div>
                <div>All Rights Reserved</div>
            </div>
            <div class="text-[#DADADA] text-sm hidden lg:block">
                Copyright <?= date('Y') ?> <span class="px-3 xl:px-10">|</span> <?= $site ?> <span class="px-3 xl:px-10">|</span> All Rights Reserved
            </div>
            <div><a href="https://www.aiims.com.au" target="_blank"><?= renderImg('aiims.png', 'logo') ?></a></div>
        </div>
    </div>
</footer>