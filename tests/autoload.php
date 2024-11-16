<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phario\\phive\\authxmlconfigfilelocatortest' => '/unit/shared/config/AuthXmlConfigFileLocatorTest.php',
                'phario\\phive\\authxmlconfigtest' => '/unit/shared/config/AuthXmlConfigTest.php',
                'phario\\phive\\checksumservicetest' => '/unit/services/checksum/ChecksumServiceTest.php',
                'phario\\phive\\cli\\outputlocatortest' => '/unit/shared/cli/output/OutputLocatorTest.php',
                'phario\\phive\\commandlocatortest' => '/unit/CommandLocatorTest.php',
                'phario\\phive\\composeraliastest' => '/unit/shared/ComposerAliasTest.php',
                'phario\\phive\\composercommandconfigtest' => '/unit/commands/composer/ComposerCommandConfigTest.php',
                'phario\\phive\\composercommandtest' => '/unit/commands/composer/ComposerCommandTest.php',
                'phario\\phive\\composerservicetest' => '/unit/commands/composer/ComposerServiceTest.php',
                'phario\\phive\\compositeauthconfigtest' => '/unit/shared/config/CompositeAuthConfigTest.php',
                'phario\\phive\\configtest' => '/unit/shared/config/ConfigTest.php',
                'phario\\phive\\configuredphartest' => '/unit/shared/phar/ConfiguredPharTest.php',
                'phario\\phive\\consoleinputtest' => '/unit/shared/cli/ConsoleInputTest.php',
                'phario\\phive\\curlconfigbuildertest' => '/unit/shared/http/CurlConfigBuilderTest.php',
                'phario\\phive\\curlconfigtest' => '/unit/shared/http/CurlConfigTest.php',
                'phario\\phive\\curlhttpclienttest' => '/unit/shared/http/CurlHttpClientTest.php',
                'phario\\phive\\defaultcommandconfigtest' => '/unit/commands/default/DefaultCommandConfigTest.php',
                'phario\\phive\\defaultcommandtest' => '/unit/commands/default/DefaultCommandTest.php',
                'phario\\phive\\environmentauthconfigtest' => '/unit/shared/config/EnvironmentAuthConfigTest.php',
                'phario\\phive\\environmentlocatortest' => '/unit/shared/environment/EnvironmentLocatorTest.php',
                'phario\\phive\\etagtest' => '/unit/shared/http/ETagTest.php',
                'phario\\phive\\factorytest' => '/unit/FactoryTest.php',
                'phario\\phive\\filedownloadertest' => '/unit/shared/download/FileDownloaderTest.php',
                'phario\\phive\\gitawarephiveversiontest' => '/unit/shared/version/GitAwarePhiveVersionTest.php',
                'phario\\phive\\githubrepositorytest' => '/unit/shared/repository/GithubRepositoryTest.php',
                'phario\\phive\\gitlabrepositorytest' => '/unit/shared/repository/GitlabRepositoryTest.php',
                'phario\\phive\\gnupgkeydownloadertest' => '/unit/services/key/gpg/GnupgKeyDownloaderTest.php',
                'phario\\phive\\gnupgkeyimportertest' => '/unit/services/key/gpg/GnupgKeyImporterTest.php',
                'phario\\phive\\gnupgsignatureverifiertest' => '/unit/services/signature/gpg/GnupgSignatureVerifierTest.php',
                'phario\\phive\\gnupgverificationresulttest' => '/unit/services/signature/gpg/GnupgVerificationResultTest.php',
                'phario\\phive\\helpcommandtest' => '/unit/commands/help/HelpCommandTest.php',
                'phario\\phive\\homepharsxmlmigrationtest' => '/unit/services/migration/HomePharsXmlMigrationTest.php',
                'phario\\phive\\homephivexmlmigrationtest' => '/unit/services/migration/HomePhiveXmlMigrationTest.php',
                'phario\\phive\\httpprogressupdatetest' => '/unit/shared/http/HttpProgressUpdateTest.php',
                'phario\\phive\\httpresponsetest' => '/unit/shared/http/HttpResponseTest.php',
                'phario\\phive\\installcommandconfigtest' => '/unit/commands/install/InstallCommandConfigTest.php',
                'phario\\phive\\jsondatatest' => '/unit/shared/JsonDataTest.php',
                'phario\\phive\\keyimportresulttest' => '/unit/services/key/KeyImportResultTest.php',
                'phario\\phive\\keyservicetest' => '/unit/services/key/KeyServiceTest.php',
                'phario\\phive\\listcommandtest' => '/unit/commands/list/ListCommandTest.php',
                'phario\\phive\\localphivexmlconfigtest' => '/unit/shared/config/LocalPhiveXmlConfigTest.php',
                'phario\\phive\\localsslcertificatetest' => '/unit/shared/http/LocalSslCertificateTest.php',
                'phario\\phive\\migrationmocks' => '/unit/services/migration/MigrationMocks.php',
                'phario\\phive\\optionstest' => '/unit/shared/cli/OptionsTest.php',
                'phario\\phive\\pharaliastest' => '/unit/shared/phar/PharAliasTest.php',
                'phario\\phive\\phardownloadertest' => '/unit/services/phar/PharDownloaderTest.php',
                'phario\\phive\\pharioaliasresolvertest' => '/unit/services/phar/PharIoAliasResolverTest.php',
                'phario\\phive\\phariorepositorytest' => '/unit/shared/repository/PharIoRepositoryTest.php',
                'phario\\phive\\pharregistrytest' => '/unit/shared/PharRegistryTest.php',
                'phario\\phive\\pharservicetest' => '/unit/services/phar/PharServiceTest.php',
                'phario\\phive\\phartest' => '/unit/shared/phar/PharTest.php',
                'phario\\phive\\phivecontexttest' => '/unit/PhiveContextTest.php',
                'phario\\phive\\phivexmlconfigfilelocatortest' => '/unit/shared/config/PhiveXmlConfigFileLocatorTest.php',
                'phario\\phive\\projectphivexmlmigrationtest' => '/unit/services/migration/ProjectPhiveXmlMigrationTest.php',
                'phario\\phive\\purgecommandtest' => '/unit/commands/purge/PurgeCommandTest.php',
                'phario\\phive\\regressiontestbootstrap' => '/regression/RegressionTestBootstrap.php',
                'phario\\phive\\regressiontests\\installcommandtest' => '/regression/InstallCommandTest.php',
                'phario\\phive\\regressiontests\\purgecommandtest' => '/regression/PurgeCommandTest.php',
                'phario\\phive\\regressiontests\\regressiontestcase' => '/regression/RegressionTestCase.php',
                'phario\\phive\\regressiontests\\removecommandtest' => '/regression/RemoveCommandTest.php',
                'phario\\phive\\regressiontests\\updatecommandtest' => '/regression/UpdateCommandTest.php',
                'phario\\phive\\regressiontests\\versioncommandtest' => '/regression/VersionCommandTest.php',
                'phario\\phive\\releasecollectiontest' => '/unit/shared/phar/ReleaseCollectionTest.php',
                'phario\\phive\\releasetest' => '/unit/shared/phar/ReleaseTest.php',
                'phario\\phive\\remotesourceslistfileloadertest' => '/unit/shared/sources/RemoteSourcesListFileLoaderTest.php',
                'phario\\phive\\removecommandconfigtest' => '/unit/commands/remove/RemoveCommandConfigTest.php',
                'phario\\phive\\requestedphartest' => '/unit/shared/phar/RequestedPharTest.php',
                'phario\\phive\\resetcommandconfigtest' => '/unit/commands/reset/ResetCommandConfigTest.php',
                'phario\\phive\\resetcommandtest' => '/unit/commands/reset/ResetCommandTest.php',
                'phario\\phive\\scalartestdataprovider' => '/unit/ScalarTestDataProvider.php',
                'phario\\phive\\sha1hashtest' => '/unit/shared/hash/sha/Sha1HashTest.php',
                'phario\\phive\\sha256hashtest' => '/unit/shared/hash/sha/Sha256HashTest.php',
                'phario\\phive\\sha384hashtest' => '/unit/shared/hash/sha/Sha384HashTest.php',
                'phario\\phive\\sha512hashtest' => '/unit/shared/hash/sha/Sha512HashTest.php',
                'phario\\phive\\skelcommandconfigtest' => '/unit/commands/skel/SkelCommandConfigTest.php',
                'phario\\phive\\sourceslisttest' => '/unit/shared/SourcesListTest.php',
                'phario\\phive\\staticphiveversiontest' => '/unit/shared/version/StaticPhiveVersionTest.php',
                'phario\\phive\\targetdirectorylocatortest' => '/unit/commands/TargetDirectoryLocatorTest.php',
                'phario\\phive\\teststreamwrapper' => '/unit/TestStreamWrapper.php',
                'phario\\phive\\unixoidenvironmenttest' => '/unit/shared/environment/UnixoidEnvironmentTest.php',
                'phario\\phive\\unixoidpharinstallertest' => '/unit/services/phar/UnixoidPharInstallerTest.php',
                'phario\\phive\\unsupportedhashstub' => '/unit/services/checksum/stubs/UnsupportedHashStub.php',
                'phario\\phive\\updatecommandconfigtest' => '/unit/commands/update/UpdateCommandConfigTest.php',
                'phario\\phive\\urltest' => '/unit/shared/UrlTest.php',
                'phario\\phive\\windowsenvironmenttest' => '/unit/shared/environment/WindowsEnvironmentTest.php',
                'phario\\phive\\windowspharinstallertest' => '/unit/services/phar/WindowsPharInstallerTest.php',
                'phario\\phive\\xmlfiletest' => '/unit/shared/XmlFileTest.php',
                'unit\\shared\\http\\authenticationtest' => '/unit/shared/http/AuthenticationTest.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd