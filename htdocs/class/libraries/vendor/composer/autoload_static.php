<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb111d443af336ae9955b26ed60e9c14
{
    public static $files = array (
        '6bc45d0537e6858fd179bdbc31d62c79' => __DIR__ . '/..' . '/raveren/kint/Kint.class.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xmf\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xmf\\' => 
        array (
            0 => __DIR__ . '/..' . '/xoops/xmf/src/Xmf',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WideImage' => 
            array (
                0 => __DIR__ . '/..' . '/smottt/wideimage/lib',
            ),
        ),
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'RandomLib\\AbstractMixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/AbstractMixer.php',
        'RandomLib\\Factory' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Factory.php',
        'RandomLib\\Generator' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Generator.php',
        'RandomLib\\Mixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer.php',
        'RandomLib\\Mixer\\Hash' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer/Hash.php',
        'RandomLib\\Source' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source.php',
        'RandomLib\\Source\\CAPICOM' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/CAPICOM.php',
        'RandomLib\\Source\\MTRand' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/MTRand.php',
        'RandomLib\\Source\\MicroTime' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/MicroTime.php',
        'RandomLib\\Source\\OpenSSL' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/OpenSSL.php',
        'RandomLib\\Source\\Rand' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/Rand.php',
        'RandomLib\\Source\\Random' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/Random.php',
        'RandomLib\\Source\\URandom' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/URandom.php',
        'RandomLib\\Source\\UniqID' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/UniqID.php',
        'SecurityLib\\AbstractFactory' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/AbstractFactory.php',
        'SecurityLib\\BaseConverter' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BaseConverter.php',
        'SecurityLib\\BigMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath.php',
        'SecurityLib\\BigMath\\BCMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/BCMath.php',
        'SecurityLib\\BigMath\\GMP' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/GMP.php',
        'SecurityLib\\BigMath\\PHPMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/PHPMath.php',
        'SecurityLib\\Enum' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Enum.php',
        'SecurityLib\\Hash' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Hash.php',
        'SecurityLib\\Strength' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Strength.php',
        'Symfony\\Component\\Yaml\\Dumper' => __DIR__ . '/..' . '/symfony/yaml/Dumper.php',
        'Symfony\\Component\\Yaml\\Escaper' => __DIR__ . '/..' . '/symfony/yaml/Escaper.php',
        'Symfony\\Component\\Yaml\\Exception\\DumpException' => __DIR__ . '/..' . '/symfony/yaml/Exception/DumpException.php',
        'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/yaml/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Yaml\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/yaml/Exception/ParseException.php',
        'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/yaml/Exception/RuntimeException.php',
        'Symfony\\Component\\Yaml\\Inline' => __DIR__ . '/..' . '/symfony/yaml/Inline.php',
        'Symfony\\Component\\Yaml\\Parser' => __DIR__ . '/..' . '/symfony/yaml/Parser.php',
        'Symfony\\Component\\Yaml\\Unescaper' => __DIR__ . '/..' . '/symfony/yaml/Unescaper.php',
        'Symfony\\Component\\Yaml\\Yaml' => __DIR__ . '/..' . '/symfony/yaml/Yaml.php',
        'WideImage\\Canvas' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Canvas.php',
        'WideImage\\Coordinate' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Coordinate.php',
        'WideImage\\Exception\\Exception' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/Exception.php',
        'WideImage\\Exception\\GDFunctionResultException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/GDFunctionResultException.php',
        'WideImage\\Exception\\InvalidCanvasMethodException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidCanvasMethodException.php',
        'WideImage\\Exception\\InvalidCoordinateException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidCoordinateException.php',
        'WideImage\\Exception\\InvalidFontFileException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidFontFileException.php',
        'WideImage\\Exception\\InvalidImageDimensionException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageDimensionException.php',
        'WideImage\\Exception\\InvalidImageHandleException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageHandleException.php',
        'WideImage\\Exception\\InvalidImageSourceException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageSourceException.php',
        'WideImage\\Exception\\NoFontException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/NoFontException.php',
        'WideImage\\Exception\\UnknownErrorWhileMappingException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnknownErrorWhileMappingException.php',
        'WideImage\\Exception\\UnknownImageOperationException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnknownImageOperationException.php',
        'WideImage\\Exception\\UnsupportedFormatException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnsupportedFormatException.php',
        'WideImage\\Font\\GDF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/GDF.php',
        'WideImage\\Font\\PS' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/PS.php',
        'WideImage\\Font\\TTF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/TTF.php',
        'WideImage\\Image' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Image.php',
        'WideImage\\MapperFactory' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/MapperFactory.php',
        'WideImage\\Mapper\\BMP' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/BMP.php',
        'WideImage\\Mapper\\GD' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GD.php',
        'WideImage\\Mapper\\GD2' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GD2.php',
        'WideImage\\Mapper\\GIF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GIF.php',
        'WideImage\\Mapper\\JPEG' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/JPEG.php',
        'WideImage\\Mapper\\PNG' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/PNG.php',
        'WideImage\\Mapper\\TGA' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/TGA.php',
        'WideImage\\Mapper\\WEBP' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/WEBP.php',
        'WideImage\\OperationFactory' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/OperationFactory.php',
        'WideImage\\Operation\\AddNoise' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AddNoise.php',
        'WideImage\\Operation\\ApplyConvolution' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyConvolution.php',
        'WideImage\\Operation\\ApplyFilter' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyFilter.php',
        'WideImage\\Operation\\ApplyMask' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyMask.php',
        'WideImage\\Operation\\AsGrayscale' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AsGrayscale.php',
        'WideImage\\Operation\\AsNegative' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AsNegative.php',
        'WideImage\\Operation\\AutoCrop' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AutoCrop.php',
        'WideImage\\Operation\\CopyChannelsPalette' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CopyChannelsPalette.php',
        'WideImage\\Operation\\CopyChannelsTrueColor' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CopyChannelsTrueColor.php',
        'WideImage\\Operation\\CorrectGamma' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CorrectGamma.php',
        'WideImage\\Operation\\Crop' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Crop.php',
        'WideImage\\Operation\\Exception\\InvalidFitMethodException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Exception/InvalidFitMethodException.php',
        'WideImage\\Operation\\Exception\\InvalidResizeDimensionException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Exception/InvalidResizeDimensionException.php',
        'WideImage\\Operation\\Flip' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Flip.php',
        'WideImage\\Operation\\GetMask' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/GetMask.php',
        'WideImage\\Operation\\Merge' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Merge.php',
        'WideImage\\Operation\\Mirror' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Mirror.php',
        'WideImage\\Operation\\Resize' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Resize.php',
        'WideImage\\Operation\\ResizeCanvas' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ResizeCanvas.php',
        'WideImage\\Operation\\Rotate' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Rotate.php',
        'WideImage\\Operation\\RoundCorners' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/RoundCorners.php',
        'WideImage\\Operation\\Unsharp' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Unsharp.php',
        'WideImage\\PaletteImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/PaletteImage.php',
        'WideImage\\TrueColorImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/TrueColorImage.php',
        'WideImage\\WideImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/WideImage.php',
        'Xmf\\Database\\Migrate' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Database/Migrate.php',
        'Xmf\\Database\\TableLoad' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Database/TableLoad.php',
        'Xmf\\Database\\Tables' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Database/Tables.php',
        'Xmf\\Debug' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Debug.php',
        'Xmf\\FilterInput' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/FilterInput.php',
        'Xmf\\Highlighter' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Highlighter.php',
        'Xmf\\IPAddress' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/IPAddress.php',
        'Xmf\\Jwt\\JsonWebToken' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Jwt/JsonWebToken.php',
        'Xmf\\Jwt\\KeyFactory' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Jwt/KeyFactory.php',
        'Xmf\\Jwt\\TokenFactory' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Jwt/TokenFactory.php',
        'Xmf\\Jwt\\TokenReader' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Jwt/TokenReader.php',
        'Xmf\\Key\\ArrayStorage' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Key/ArrayStorage.php',
        'Xmf\\Key\\Basic' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Key/Basic.php',
        'Xmf\\Key\\FileStorage' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Key/FileStorage.php',
        'Xmf\\Key\\KeyAbstract' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Key/KeyAbstract.php',
        'Xmf\\Key\\StorageInterface' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Key/StorageInterface.php',
        'Xmf\\Language' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Language.php',
        'Xmf\\Metagen' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Metagen.php',
        'Xmf\\Module\\Admin' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Admin.php',
        'Xmf\\Module\\Helper' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper.php',
        'Xmf\\Module\\Helper\\AbstractHelper' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper/AbstractHelper.php',
        'Xmf\\Module\\Helper\\Cache' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper/Cache.php',
        'Xmf\\Module\\Helper\\GenericHelper' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper/GenericHelper.php',
        'Xmf\\Module\\Helper\\Permission' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper/Permission.php',
        'Xmf\\Module\\Helper\\Session' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Module/Helper/Session.php',
        'Xmf\\Random' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Random.php',
        'Xmf\\Request' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Request.php',
        'Xmf\\Yaml' => __DIR__ . '/..' . '/xoops/xmf/src/Xmf/Yaml.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb111d443af336ae9955b26ed60e9c14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb111d443af336ae9955b26ed60e9c14::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb111d443af336ae9955b26ed60e9c14::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfb111d443af336ae9955b26ed60e9c14::$classMap;

        }, null, ClassLoader::class);
    }
}
