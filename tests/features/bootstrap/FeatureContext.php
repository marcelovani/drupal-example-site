<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Gherkin\Node\PyStringNode;

/**
 * FeatureContext
 */
class FeatureContext implements SnippetAcceptingContext {

  /**
   * Stores drupal context.
   */
  private $drupalContext;

  /**
   * @var MinkContext
   */
  private $MinkContext;

  /**
   * @BeforeScenario
   *
   * @param BeforeScenarioScope $scope
   */
  public function before(BeforeScenarioScope $scope) {
    // Get the environment.
    $environment = $scope->getEnvironment();

    // Get all the contexts we need.
    $this->MinkContext = $environment->getContext('Drupal\DrupalExtension\Context\MinkContext');
    $this->drupalContext = $environment->getContext('Drupal\DrupalExtension\Context\DrupalContext');
    // Bootstrap drupal.
    $this->drupalContext->getDriver('drupal');
  }

}
