<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AllNews\getACFLayout(),
                    Components\Awards\getACFLayout(),
                    Components\BigCards\getACFLayout(),
                    Components\Breadcrumb\getACFLayout(),
                    Components\CaseStudy\getACFLayout(),
                    Components\ChecklistCard\getACFLayout(),
                    Components\ClientLogos\getACFLayout(),
                    Components\ConfettiBanner\getACFLayout(),
                    Components\ComplementaryFeatures\getACFLayout(),
                    Components\ContactUs\getACFLayout(),
                    Components\ContentLibraryHero\getACFLayout(),
                    Components\ContentLibraryCategories\getACFLayout(),
                    Components\ContentLibraryFeaturedPost\getACFLayout(),
                    Components\ContentLibrarySliders\getACFLayout(),
                    Components\ContentCards\getACFLayout(),
                    Components\EventsCards\getACFLayout(),
                    Components\FeaturedPodcast\getACFLayout(),
                    Components\FeaturedEvent\getACFLayout(),
                    Components\Form\getACFLayout(),
                    Components\G2Awards\getACFLayout(),
                    Components\GradientBackgroundSection\getACFLayout(),
                    Components\HomepageHero\getACFLayout(),
                    Components\HomeProductsSection\getACFLayout(),
                    Components\HomeWhy15Five\getACFLayout(),
                    Components\HomeOurPlatform\getACFLayout(),
                    Components\HomeClients\getACFLayout(),
                    Components\HorizontalHero\getACFLayout(),
                    Components\HowItWorks\getACFLayout(),
                    Components\IconButtons\getACFLayout(),
                    Components\Iframe\getACFLayout(),
                    Components\ImageCheckmarkCard\getACFLayout(),
                    Components\ImageTitleImage\getACFLayout(),
                    Components\IntegrationsCards\getACFLayout(),
                    Components\InTheNews\getACFLayout(),
                    Components\JobPostings\getACFLayout(),
                    Components\LineButton\getACFLayout(),
                    Components\MasonryGallery\getACFLayout(),
                    Components\MicrositeAgenda\getACFLayout(),
                    Components\MicrositeHero\getACFLayout(),
                    Components\MockupBanner\getACFLayout(),
                    Components\NewsletterBanner\getACFLayout(),
                    Components\NewsTabs\getACFLayout(),
                    Components\Offices\getACFLayout(),
                    Components\PlansPricing\getACFLayout(),
                    Components\PlansPricingNew\getACFLayout(),
                    Components\PlansPricingFeaturesList\getACFLayout(),
                    Components\PodcastEpisodes\getACFLayout(),
                    Components\PodcastGuests\getACFLayout(),
                    Components\PodcastsHero\getACFLayout(),
                    Components\PodcastHosts\getACFLayout(),
                    Components\ProductFeatureChecklist\getACFLayout(),
                    Components\ProductFeatureContentLibrary\getACFLayout(),
                    Components\ProductFeatureHero\getACFLayout(),
                    Components\ProductFeatureTabs\getACFLayout(),
                    Components\PromotionalCard\getACFLayout(),
                    Components\QuoteColoredNumbers\getACFLayout(),
                    Components\SingleEventBlock\getACFLayout(),
                    Components\SolutionsHeroBox\getACFLayout(),
                    Components\Spacer\getACFLayout(),
                    Components\Team\getACFLayout(),
                    Components\Testimonial\getACFLayout(),
                    Components\TextImage\getACFLayout(),
                    Components\TextImageBigCTA\getACFLayout(),
                    Components\TextImageButton\getACFLayout(),
                    Components\TextImageFloatingBar\getACFLayout(),
                    Components\TextImageFramed\getACFLayout(),
                    Components\TextImageSmallCTA\getACFLayout(),
                    Components\TitleAndTwoColumns\getACFLayout(),
                    Components\TransformPricing\getACFLayout(),
                    Components\TwoColumnResourceLinks\getACFLayout(),
                    Components\TwoColumnTextSection\getACFLayout(),
                    Components\TwoVideoSection\getACFLayout(),
                    Components\ValuesBenefits\getACFLayout(),
                    Components\VideoAndCtaHero\getACFLayout(),
                    Components\VideoHero\getACFLayout(),
                    Components\VideoPopupText\getACFLayout(),
                    Components\VideoTestimonial\getACFLayout(),
                    Components\Why15FiveHero\getACFLayout(),
                    Components\WYSIWYG\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-thank-you.php',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/microsite.php',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-thrive.php',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-secondary-navigation.php',
                ],
            ],
        ],
    ]);
});

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'prefooter',
        'title' => 'Prefooter',
        'style' => 'default',
        'position' => 'side',
        'fields' => [
            [
                'label' => __('Disable Prefooter', 'flynt'),
                'name' => 'disablePrefooterToggle',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-thank-you.php',
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-secondary-navigation.php',
                ],
            ],
        ],
    ]);
});