<?php

/**
 * @file
 * Contains \FeatureContext.
 */

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\TableNode;
use Drupal\DrupalExtension\Context\DrupalContext;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;
use Drupal\paragraphs\Entity\Paragraph;

use Behat\Mink\Driver\Selenium2Driver;
use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Mink\Exception\ExpectationException;
use Behat\Testwork\Tester\Result\TestResult;

/**
 * Defines generic step definitions.
 */
class FeatureContext extends DrupalContext implements SnippetAcceptingContext
{

  /**
   * @BeforeSuite
   *
   * Enables test content.
   */
  public static function setup(BeforeSuiteScope $scope)
  {

  }

  /**
   * @AfterSuite
   *
   * Disables test content.
   */
  public static function teardown(AfterSuiteScope $scope)
  {

  }

}
