<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.sass).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capina
 */
get_header();
?>
<main class="page__main" id="main">
    <section class="hero">
        <div class="hero__container container">
            <h1 class="visually-hidden">
                Capnia: Revolutionary technology to improve newborn health care!
            </h1>
            <div class="hero__swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero__wrapper">
                            <div class="hero__content">
                                <h2 class="hero__title title-huge">
                                    Jaundice Management is complex but improving outcomes is easier
                                    than you think with ETCOc Testing.
                                </h2>
                                <div class="hero__info text-huge">
                                    <p>
                                        A simple breath test, the <span>CoSense®</span> ETCO Monitor
                                        provides early and accurate measurement of hemolysis and
                                        neurotoxic risk that can lead to hemolytic hyperbilirubinemia
                                        (HB) and kernicterus.
                                    </p>
                                    <p>
                                        <mark>AAP Guideline:</mark> «ETCOc is the only test that can
                                        confirm the presence or absence of hemolysis and measure the
                                        rate of bilirubin production.»
                                    </p>
                                </div>
                                <a class="hero__link link link--yellow" href="#">Review AAP Guidelines</a>
                            </div>
                            <picture class="hero__picture">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-1.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-1.jpg" class="hero__image" width="672" height="672"
                                    alt="Newborn baby lying in a crib" />
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__wrapper">
                            <div class="hero__content">
                                <h2 class="hero__title title-huge">
                                    Evaluate each newborn’s bilirubin neurotoxicity risk to send
                                    them home with confidence.
                                </h2>
                                <div class="hero__info text-huge">
                                    <p>
                                        Most babies readmitted for hyperbilirubinemia (HB) are
                                        considered low risk at the time of discharge. Universal
                                        testing with the non-invasive CoSense® ETCO monitor before
                                        discharge identifies babies with hemolytic conditions who may
                                        be at high risk of neurotoxicity.
                                    </p>
                                </div>
                                <a class="hero__link link link--yellow" href="#">Learn More</a>
                            </div>
                            <picture class="hero__picture">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-2.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-2.jpg" class="hero__image" width="672" height="672"
                                    alt="The doctor will examine the newborn" />
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__wrapper">
                            <div class="hero__content">
                                <h2 class="hero__title title-huge">
                                    ETCOc testing of EVERY baby before discharge
                                    decreasesre-admissions, unnecessary needlesticks, phototherapy,
                                    and costs.
                                </h2>
                                <div class="hero__info text-huge">
                                    <p>
                                        An ETCOc test, combined with TcB/TSB measurement, for all
                                        babies before discharge or during phototherapy treatment has
                                        proven to:
                                    </p>
                                    <ul>
                                        <li>
                                            Prevent readmission for hyperbilirubinemia (HB) and
                                            mother/baby separation. <a href="#">(Bao 2022)</a>
                                        </li>
                                        <li>
                                            50% reduction in DAT blood tests
                                            <a href="#">(Elsaie 2020; Bahr 2021)</a>
                                        </li>
                                        <li>
                                            >20%+ reduction in photo therapy and improved utilization.
                                            <a href="#">(Yang 2023)</a>
                                        </li>
                                        <li>Reduced cost <a href="#">(Bahr. 2021)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <picture class="hero__picture">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-3.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-3.jpg" class="hero__image" width="672" height="672"
                                    alt="ETCO apparatus for newborn screening" />
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__wrapper">
                            <div class="hero__content">
                                <h2 class="hero__title title-huge">
                                    Know the facts when managing jaundice. ETCOc is the
                                    evidence-based gold standard for diagnosing hemolysis and
                                    endorsed by APP.
                                </h2>
                                <div class="hero__info text-huge">
                                    <p>
                                        <mark>AAP Guideline:</mark> Lower gestational age and
                                        hemolytic disease are risk factors for developing significant
                                        hyperbilirubinemia and for bilirubin neurotoxicity. Identify
                                        and quantify hemolysis EARLY, provide the necessary treatment,
                                        and send them home safe
                                    </p>
                                </div>
                                <a class="hero__link link link--yellow" href="#">Review AAP Guidelines</a>
                            </div>
                            <picture class="hero__picture">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-4.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img/hero-slider-4.jpg" class="hero__image" width="672" height="672"
                                    alt="Young family together with a newborn baby" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="hero__swiper-pagination swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="monitoring">
        <div class="container">
            <h2 class="monitoring__title title-medium">
                CoSense® end-tidal carbon monoxide (ETCO) monitoring is the non-invasive,
                rapid, and proven way to identify high-risk hemolytic cases from newborns
                with harmless Jaundice prior to discharge.
            </h2>
            <div class="monitoring__wrapper">
                <picture class="monitoring__picture">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/monitoring-img/monitoring-image.webp" type="image/webp" />
                    <img class="monitoring__image" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/monitoring-img/monitoring-image.jpg"
                        width="733" height="451"
                        alt="The newborn is tested through the endogenous carbon monoxide (ETCO) CoSense®" />
                </picture>
                <div class="monitoring__info">
                    <div class="monitoring__text text-medium">
                        <p>
                            In less than 5 minutes, the CoSense® ETCOc Monitor detects the rate
                            of hemolysis through non-invasive ETCOc testing of a newborn’s
                            breath to accurately detect and measure the overproduction of
                            unconjugated bilirubin and provide clear guidance for jaundice
                            management.
                        </p>
                    </div>
                    <a class="monitoring__link link link--yellow" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="jaundice">
        <div class="container">
            <div class="jaundice__wrapper">
                <div class="jaundice__info">
                    <h2 class="jaundice__title title-small">
                        Jaundice Management 101: Understand the ins and outs of bilirubin
                        imbalance.
                    </h2>
                    <div class="jaundice__text text-medium">
                        <p>Excess bilirubin accumulates in newborns for three reasons:</p>
                        <ul>
                            <li>
                                <span>Over production</span> due to an underlying hemolytic
                                condition.
                            </li>
                            <li>
                                <span>Impaired conjugation</span> due to limited function of an
                                immature liver.
                            </li>
                            <li>
                                <span>Impaired elimination</span> due to problems with feeding or
                                excretion.
                            </li>
                        </ul>
                        <p>
                            Prior to ETCOc tests, increased production of neurotoxic
                            unconjugated bilirubin was difficult to detect until symptoms were
                            evident, putting newborns at elevated risk for
                            <button class="jaundice__button button-modal js-open-modal" type="button"
                                aria-label="Open kernicterus modal" title="Open kernicterus modal">
                                kernicterus
                            </button>
                            and requiring immediate phototherapy.
                            <dialog class="jaundice__dialog dialog js-modal" aria-labelledby="dialog-header-kernicterus"
                                aria-describedby="dialog-content-kernicterus">
                                <div class="dialog__container">
                                    <div class="dialog__inner">
                                        <button class="dialog__modal-close js-close-modal" type="button"
                                            aria-label="Close kernicterus modal" title="Close kernicterus modal"
                                            autofocus></button>
                                    </div>
                                    <div class="dialog__modal-content">
                                        <div class="dialog__modal-inner">
                                            <h3 class="dialog__modal-title visually-hidden"
                                                id="dialog-header-kernicterus">
                                                Adverse Neurodevelopmental Outcomes and Risk Factors
                                                Associated with Neonatal Jaundice
                                            </h3>
                                            <div class="dialog__modal-text text-medium" id="dialog-content-kernicterus">
                                                <p>
                                                    Adverse neurodevelopmental outcomes from jaundice may
                                                    include Kernicterus (KI), Low IQ, auditory anomalies,
                                                    and respiratory failure.
                                                </p>
                                                <p>
                                                    KI is a life-threatening condition caused by Bilirubin
                                                    toxicity to parts of the brain. Short hospital stays
                                                    contribute to KI cases as newborns are discharged at
                                                    48-72 hours after birth while TsB peaks at 3-5 days of
                                                    age, making bilirubin management an outpatient problem.
                                                    Other risk factors include the failure to check
                                                    bilirubin or diagnose a hemolytic condition in jaundiced
                                                    infants in first 24 hours and the failure to recognize
                                                    risk factors.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </dialog>
                        </p>
                    </div>
                </div>
                <div class="jaundice__swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-1.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-1.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="Stage one - the red blood cell breaks down, bilirubin and carbon monoxide enter the bloodstream." />
                                </picture>
                                <figcaption>
                                    When a red blood cell lyses, bilirubin and carbon monoxide are
                                    released into the bloodstream.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-2.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-2.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="Stage two - The carbon monoxide conjugates with hemoglobin and is exhaled through the lungs." />
                                </picture>
                                <figcaption>
                                    The carbon monoxide conjugates with hemoglobin and is exhaled
                                    through the lungs.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-3.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-3.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="Stage three - The bilirubin is conjugated in the liver and excreted" />
                                </picture>
                                <figcaption>
                                    The bilirubin is conjugated in the liver and excreted. The
                                    newborn liver can manage a normal level of hemolysis.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-4.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-4.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="Stage four - hemolysis rises, the liver is unable to keep pace with bilirubin production." />
                                </picture>
                                <figcaption>
                                    But if the rate of hemolysis rises, the liver is unable to keep
                                    pace with bilirubin production.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-5.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-5.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="Stage five - Accumulated bilirubin may pass through the blood-brain barrier to the central nervous system, creating neurologic damage." />
                                </picture>
                                <figcaption>
                                    At high levels, accumulating unconjugated bilirubin may pass
                                    through the blood-brain barrier to the central nervous system,
                                    creating neurologic damage.
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="jaundice__figure text-medium">
                                <picture class="jaundice__picture">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-6.webp" type="image/webp" />
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/jaundice-img/jaundice-step-6.jpg"
                                        class="jaundice__image" width="765" height="430"
                                        alt="With CoSense, hemolysis is detected and monitored to manage jaundice interventions." />
                                </picture>
                                <figcaption>
                                    The best indicator of active hemolysis can be measured from
                                    exhaled breath through elevated end-tidal carbon monoxide (ETCO)
                                    levels. With CoSense, hemolysis is detected and monitored to
                                    manage jaundice interventions.
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="jaundice__swiper-pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="jaundice-treatment">
        <div class="jaundice-treatment__container container">
            <h2 class="visually-hidden">
                Assessment and Management of Neonatal Jaundice: Integrating Hemolysis
                Impact Measurement and ETCOc as a Gold Standard Diagnostic Test
            </h2>
            <div class="jaundice-treatment__content">
                <h3 class="jaundice-treatment__title title-small">
                    How are you measuring t he impact of hemolysis on bilirubin management?
                </h3>
                <div class="jaundice-treatment__text text-medium">
                    <p>
                        A common protocol is to perform one or more transcutaneous bilirubin
                        (TCB) tests on every baby within the first 24 hours. When jaundice is
                        suspected, an invasive total serum bilirubin (TSB) test is required.
                    </p>
                    <p>
                        However, these
                        <button class="jaundice-treatment__button button-modal js-open-modal" type="button"
                            aria-label="Open blood tests modal" title="Open blood tests modal">
                            blood tests
                        </button>
                        can be unreliable in identifying cases of over unconjugated bilirubin
                        production because they reflect all bilirubin in the blood. A high
                        TSB/TCB level could indicate elevated production, decreased
                        conjugation of bilirubin in the liver, or decreased excretion of
                        conjugated bilirubin. (Guerra Ruiz A et al. Adv Lab Med. 2021 &
                        Olusanya BO et al. Lancet Child Adolesc Health. 2018.) Thus, TSB/TCB
                        testing alone is not sufficient for Jaundice management.
                        <dialog class="jaundice-treatment__dialog dialog js-modal"
                            aria-labelledby="dialog-header-blood-tests" aria-describedby="dialog-content-blood-tests">
                            <div class="dialog__container">
                                <div class="dialog__inner">
                                    <button class="dialog__modal-close js-close-modal" type="button"
                                        aria-label="Close blood tests modal" title="Close blood tests modal"
                                        autofocus></button>
                                </div>
                                <div class="dialog__modal-content">
                                    <div class="dialog__modal-inner">
                                        <h3 class="dialog__modal-title visually-hidden" id="dialog-header-blood-tests">
                                            Inadequacy of DAT Testing in Diagnosing Hemolytic Conditions
                                            in Infants
                                        </h3>
                                        <div class="dialog__modal-text text-medium" id="dialog-content-blood-tests">
                                            <p>
                                                Commonly used invasive blood tests to determine if a baby
                                                is hemolyzing include coombs/DAT, CBC, Reticulocyte count,
                                                peripheral smear, Type RH, G6PD. These tests either
                                                indirectly measure bilirubin production or attempt to
                                                identify a cause of hemolysis and are often inaccurate or
                                                unable to diagnose hemolytic conditions.
                                            </p>
                                            <p>
                                                According to peer-reviewed evidence from
                                                <a href="#">Ruparel</a>, <a href="#">Elsaie</a>,
                                                <a href="#">Schutzman</a> and <a href="">Christensen</a>,
                                                DAT testing is inadequate. Positive patients typically
                                                receive unnecessary phototherapy while DAT negative
                                                patients are often sent home with an undiagnosed hemolytic
                                                condition.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </p>
                    <p>We cannot improve what we cannot measure.</p>
                </div>
            </div>
            <div class="jaundice-treatment__content">
                <h3 class="jaundice-treatment__title title-small">
                    ETCOc is the NEW diagnostic «Gold Standard» test for Jaundice
                    Management.
                </h3>
                <div class="jaundice-treatment__info">
                    <div class="jaundice-treatment__text text-medium">
                        <p>
                            «The test most deserving of the designation „gold standard“ is ETCOc
                            measurement. Moreover, this method is the one we judge best fulfills
                            the AAP 2022 recommendation to ‘identify neonates with hemolysis
                            from any cause’.Christensen RD et al. J Perinatol. 2023 Jul 19.
                        </p>
                    </div>
                    <a class="jaundice-treatment__link link link--light-blue" href="#">Read More</a>
                </div>
                <div class="jaundice-treatment__info">
                    <div class="jaundice-treatment__text text-medium">
                        <p>
                            According to AAP Guidelines, «ETCOc levels can confirm the presence
                            or absence of hemolysis, and measurement of ETCOc is the only
                            clinical test that provides a direct measurement of the rate of
                            bilirubin production…»
                        </p>
                        <p>
                            An elevated level of exhaled ETOC is a clear indication of active
                            hemolysis that can be measured and monitored non-invasively.
                        </p>
                    </div>
                    <a class="jaundice-treatment__link link link--light-blue" href="#">Review AAP Guidelines</a>
                </div>
            </div>
        </div>
    </section>

    <section class="researches">
        <div class="researches__container container">
            <div class="researches__content">
                <h2 class="researches__title title-small">
                    More than 20 years of best practice clinical evidence supports ETCOc
                    testing for jaundice management.
                </h2>
                <div class="researches__text text-medium">
                    <p>
                        Published data show that ETCOc testing provides a more accurate
                        measure of hemolysis than blood testing. More than a dozen clinical
                        studies have validated the ability of the CoSense ETCO Monitor to
                        detect the rate of hemolysis in newborns. As a result, the Academy of
                        American Pediatrics (AAP) recommends ETCOc testing to measure
                        bilirubin production rates in newborns.
                    </p>
                </div>
                <a class="researches__link link link--yellow" href="#">Review the Clinical Evidence</a>
            </div>
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/researches-img/researches-image.webp" type="image/webp" />
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/researches-img/researches-image.jpg" class="researches__image" width="746"
                    height="586" alt="The doctor's checking the labs" />
            </picture>
        </div>
    </section>

    <section class="consultants">
        <div class="consultants__container container">
            <aside class="consultants__aside">
                <h2 class="consultants__title title-huge">Our clinical advisors</h2>
            </aside>
            <div class="consultants__wrapper">
                <ul class="consultants__list">
                    <li class="consultants__item">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-1.webp" type="image/webp" />
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-1.jpg"
                                class="consultants-image" width="300" height="300" alt="Timothy M. Bahr MS, MD" />
                        </picture>
                        <h3 class="consultants__name">Timothy M. Bahr MS, MD</h3>
                        <div class="consultants__description text-medium">
                            <p>
                                Assistant Professor of Pediatrics Intermountain Health, University
                                of Utah.
                            </p>
                        </div>
                        <button class="consultants__button link link--stroke js-open-modal" type="button"
                            aria-label="Open modal" title="Open modal">
                            Learn More
                        </button>
                        <dialog class="consultants__dialog dialog js-modal"
                            aria-labelledby="dialog-header-consultants-one"
                            aria-describedby="dialog-content-consultants-one">
                            <div class="dialog__container">
                                <div class="dialog__inner">
                                    <button class="dialog__modal-close js-close-modal" type="button"
                                        aria-label="Close modal" title="Close modal" autofocus></button>
                                </div>
                                <div class="dialog__modal-content">
                                    <div class="dialog__modal-inner dialog__modal-inner--consultants">
                                        <div class="dialog__modal-info">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-1.webp"
                                                    type="image/webp" />
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-1.jpg"
                                                    class="consultants-image" width="300" height="300"
                                                    alt="Timothy M. Bahr MS, MD" />
                                            </picture>
                                            <h4 class="dialog__modal-name" id="dialog-header-consultants-one">
                                                Timothy M. Bahr MS, MD
                                            </h4>
                                            <div class="dialog__modal-description">
                                                <p>
                                                    Assistant Professor of Pediatrics Intermountain Health,
                                                    University of Utah.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dialog__modal-text dialog__modal-text--consultants text-medium"
                                            id="dialog-content-consultants-one">
                                            Dr. Bahr is a neonatologist and Assistant Professor of
                                            Pediatrics at Intermountain Health and the University of
                                            Utah. Dr. Bahr completed medical school at the University of
                                            Iowa and his pediatrics residency at Phoenix Children’s
                                            Hospital. He completed his fellowship in neonatology and
                                            neonatal hematology with Drs. Robert Christensen and Robin
                                            Ohls at the University of Utah in Salt Lake City, UT. Dr.
                                            Bahr’s research and clinical interests are in hematologic
                                            disorders of neonates. He has published extensive clinical
                                            and translational research in areas such as (1) the
                                            management and diagnosis of neonates with
                                            hyperbilirubinemia; (2) preventing, detecting, and managing
                                            iron deficiency in preterm neonates; and (3) improving
                                            neonatal transfusion practices.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="consultants__item">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-2.webp" type="image/webp" />
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-2.jpg"
                                class="consultants-image" width="300" height="300" alt="Anthony E. Burgos, MD, MPH" />
                        </picture>
                        <h3 class="consultants__name">Anthony E. Burgos, MD, MPH</h3>
                        <div class="consultants__description text-medium">
                            <p>
                                Associate Professor, Clinical Science Health Systems Science,
                                Kaiser Permanente Bernard J. Tyson School of Medicine, and
                                regional coordinator for normal newborn care at Kaiser Permanente
                                Downey Medical Center.
                            </p>
                        </div>
                        <button class="consultants__button link link--stroke js-open-modal" type="button"
                            aria-label="Open modal" title="Open modal">
                            Learn More
                        </button>
                        <dialog class="consultants__dialog dialog js-modal"
                            aria-labelledby="dialog-header-consultants-two"
                            aria-describedby="dialog-content-consultants-two">
                            <div class="dialog__container">
                                <div class="dialog__inner">
                                    <button class="dialog__modal-close js-close-modal" type="button"
                                        aria-label="Close modal" title="Close modal" autofocus></button>
                                </div>
                                <div class="dialog__modal-content">
                                    <div class="dialog__modal-inner dialog__modal-inner--consultants">
                                        <div class="dialog__modal-info">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-2.webp"
                                                    type="image/webp" />
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-2.jpg"
                                                    class="consultants-image" width="300" height="300"
                                                    alt="Anthony E. Burgos, MD, MPH" />
                                            </picture>
                                            <h4 class="dialog__modal-name" id="dialog-header-consultants-two">
                                                Anthony E. Burgos, MD, MPH
                                            </h4>
                                            <div class="dialog__modal-description">
                                                <p>
                                                    Associate Professor, Clinical Science Health Systems
                                                    Science, Kaiser Permanente Bernard J. Tyson School of
                                                    Medicine, and regional coordinator for normal newborn
                                                    care at Kaiser Permanente Downey Medical Center.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dialog__modal-text dialog__modal-text--consultants text-medium"
                                            id="dialog-content-consultants-two">
                                            Lorem ipsum dolor sit amet consectetur. Eleifend quam amet
                                            ullamcorper in vestibulum tempus viverra senectus feugiat.
                                            Fermentum lacus faucibus diam dui nunc faucibus. Integer
                                            egestas cursus accumsan ipsum ante blandit id nibh. Proin in
                                            sit facilisis convallis odio nunc. Libero nisi vitae dui
                                            aliquam. Eu ut maecenas nunc etiam posuere eu neque lacus
                                            aliquet. Elementum imperdiet posuere iaculis duis bibendum
                                            convallis non. Vel eu parturient tempus quis ipsum
                                            fermentum. Semper massa scelerisque eu senectus dolor
                                            sagittis etiam felis. Tincidunt interdum sit ullamcorper
                                            facilisis diam id arcu. Lectus ac ipsum elementum venenatis
                                            feugiat. Massa tempus lacinia posuere neque metus augue
                                            phasellus. Velit nulla orci pellentesque morbi diam fusce ac
                                            et. Tincidunt eu arcu mi tristique pulvinar varius. Odio
                                            tellus magna velit malesuada imperdiet in mauris. Etiam
                                            tempus leo est at consequat nulla purus urna justo. Nunc mi
                                            in mauris dignissim. Eros vel commodo in porttitor lectus
                                            sed facilisis. Ipsum id senectus turpis sodales ipsum. Nec
                                            quis vulputate sollicitudin ac blandit quam. Tristique
                                            euismod maecenas congue quisque dignissim semper turpis.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="consultants__item">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-3.webp" type="image/webp" />
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-3.jpg"
                                class="consultants-image" width="300" height="300" alt="Robert D. Christensen, MD" />
                        </picture>
                        <h3 class="consultants__name">Robert D. Christensen, MD</h3>
                        <div class="consultants__description text-medium">
                            <p>
                                Director of Neonatal Research at Intermountain Healthcare and
                                Director of the Intermountain Healthcare Clinical Neonatology
                                Program, Northern region.
                            </p>
                        </div>
                        <button class="consultants__button link link--stroke js-open-modal" type="button"
                            aria-label="Open modal" title="Open modal">
                            Learn More
                        </button>
                        <dialog class="consultants__dialog dialog js-modal"
                            aria-labelledby="dialog-header-consultants-three"
                            aria-describedby="dialog-content-consultants-three">
                            <div class="dialog__container">
                                <div class="dialog__inner">
                                    <button class="dialog__modal-close js-close-modal" type="button"
                                        aria-label="Close modal" title="Close modal" autofocus></button>
                                </div>
                                <div class="dialog__modal-content">
                                    <div class="dialog__modal-inner dialog__modal-inner--consultants">
                                        <div class="dialog__modal-info">
                                            <picture>
                                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-3.webp"
                                                    type="image/webp" />
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-3.jpg"
                                                    class="consultants-image" width="300" height="300"
                                                    alt="Robert D. Christensen, MD" />
                                            </picture>
                                            <h4 class="dialog__modal-name" id="dialog-header-consultants-three">
                                                Robert D. Christensen, MD
                                            </h4>
                                            <div class="dialog__modal-description">
                                                <p>
                                                    Director of Neonatal Research at Intermountain
                                                    Healthcare and Director of the Intermountain Healthcare
                                                    Clinical Neonatology Program, Northern region.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dialog__modal-text dialog__modal-text--consultants text-medium"
                                            id="dialog-content-consultants-three">
                                            Dr. Christensen, a pro bono advisor, is the Director of
                                            Neonatal Research at Intermountain Healthcare and Director
                                            of the Intermountain Healthcare Clinical Neonatology Program
                                            for the northern region, where the majority of his research
                                            work is focused on observational and interventional clinical
                                            studies of neonatal clinical hematology and transfusion
                                            medicine. Dr. Christensen held positions including Professor
                                            of Pediatrics at the University of Utah School of Medicine,
                                            the University of Florida College of Medicine, and the
                                            University of South Florida College of Medicine, and was
                                            Physician-in-Chief at All Children’s Hospital in St.
                                            Petersburg, Florida. He has been a member of the NIH
                                            National Heart, Lung and Blood Institute, NIH National
                                            Institute of Child Health and Human Development, and
                                            National Foundation March of Dimes, was on the executive
                                            committee of Thrasher Research Fund, and was sub-committee
                                            chair of the American Academy of Pediatrics. He has authored
                                            over 300 publications.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </li>
                    <li class="consultants__item">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-4.webp" type="image/webp" />
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/consultants-img/consultants-image-4.jpg"
                                class="consultants-image" width="300" height="300" alt="Dr. David L. Schutzman MD" />
                        </picture>
                        <h3 class="consultants__name">Dr. David L. Schutzman MD</h3>
                        <div class="consultants__description text-medium">
                            <p>
                                Physician of Neonatal-Perinatal Medicine and General Neonatology
                                affiliated with multiple hospitals in the area,
                                including Jefferson Health-Thomas Jefferson University
                                Hospitals and Einstein Medical Center Montgomery.
                            </p>
                        </div>
                        <button class="consultants__button link link--stroke js-open-modal" type="button"
                            aria-label="Open modal" title="Open modal">
                            Learn More
                        </button>
                        <dialog class="consultants__dialog dialog js-modal"
                            aria-labelledby="dialog-header-consultants-four"
                            aria-describedby="dialog-content-consultants-four">
                            <div class="dialog__container">
                                <div class="dialog__inner">
                                    <button class="dialog__modal-close js-close-modal" type="button"
                                        aria-label="Close modal" title="Close modal" autofocus></button>
                                </div>
                                <div class="dialog__modal-content">
                                    <div class="dialog__modal-inner dialog__modal-inner--consultants">
                                        <div class="dialog__modal-info">
                                            <picture>
                                                <source srcset="/img/consultants-img/consultants-image-4.webp"
                                                    type="image/webp" />
                                                <img loading="lazy" src="/img/consultants-img/consultants-image-4.jpg"
                                                    class="consultants-image" width="300" height="300"
                                                    alt="Dr. David L. Schutzman MD" />
                                            </picture>
                                            <h4 class="dialog__modal-name" id="dialog-header-consultants-one">
                                                Dr. David L. Schutzman MD
                                            </h4>
                                            <div class="dialog__modal-description">
                                                <p>
                                                    Physician of Neonatal-Perinatal Medicine and General
                                                    Neonatology affiliated with multiple hospitals in the
                                                    area, including Jefferson Health-Thomas Jefferson
                                                    University Hospitals and Einstein Medical Center
                                                    Montgomery.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="dialog__modal-text dialog__modal-text--consultants text-medium"
                                            id="dialog-content-consultants-one">
                                            Lorem ipsum dolor sit amet consectetur. Eleifend quam amet
                                            ullamcorper in vestibulum tempus viverra senectus feugiat.
                                            Fermentum lacus faucibus diam dui nunc faucibus. Integer
                                            egestas cursus accumsan ipsum ante blandit id nibh. Proin in
                                            sit facilisis convallis odio nunc. Libero nisi vitae dui
                                            aliquam. Eu ut maecenas nunc etiam posuere eu neque lacus
                                            aliquet. Elementum imperdiet posuere iaculis duis bibendum
                                            convallis non. Vel eu parturient tempus quis ipsum
                                            fermentum. Semper massa scelerisque eu senectus dolor
                                            sagittis etiam felis. Tincidunt interdum sit ullamcorper
                                            facilisis diam id arcu. Lectus ac ipsum elementum venenatis
                                            feugiat. Massa tempus lacinia posuere neque metus augue
                                            phasellus. Velit nulla orci pellentesque morbi diam fusce ac
                                            et. Tincidunt eu arcu mi tristique pulvinar varius. Odio
                                            tellus magna velit malesuada imperdiet in mauris. Etiam
                                            tempus leo est at consequat nulla purus urna justo. Nunc mi
                                            in mauris dignissim. Eros vel commodo in porttitor lectus
                                            sed facilisis. Ipsum id senectus turpis sodales ipsum. Nec
                                            quis vulputate sollicitudin ac blandit quam. Tristique
                                            euismod maecenas congue quisque dignissim semper turpis.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
