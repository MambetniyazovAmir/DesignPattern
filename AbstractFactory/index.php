<?php
/**
 * Created by PhpStorm.
 * User: Amirniyaz
 * Date: 20.05.2022
 * Time: 13:15
 */

interface System
{
    public function createButton(): Button;

    public function createCheckBox(): CheckBox;
}

class Android implements System
{
    public function createButton(): Button
    {
        $button = new AndroidButton();
        return $button;
    }

    public function createCheckBox(): CheckBox
    {
        $checkBox = new AndroidCheckBox();
        return $checkBox;
    }
}

;

class Ios implements System
{

    public function createButton(): Button
    {
        $button = new IosButton();
        return $button;
    }

    public function createCheckBox(): CheckBox
    {
        $checkBox = new IosCheckBox();
        return $checkBox;
    }
}

;

interface Button
{
    public function doSomething(): string;
}

interface CheckBox
{
    public function doSomething(): string;
}

class AndroidButton implements Button
{

    public function doSomething(): string
    {
        return "Hello I am android button\n";
    }
}

class AndroidCheckBox implements CheckBox
{

    public function doSomething(): string
    {
        return "Hello I am android checkbox\n";
    }
}

class IosButton implements Button
{

    public function doSomething(): string
    {
        return "Hello I am IOS button\n";
    }
}

class IosCheckBox implements CheckBox
{

    public function doSomething(): string
    {
        return "Hello I am IOS checkbox\n";
    }
}

function run()
{
    echo "print 1 to choose IOS or 2 to choose ANDROID\n";
    $n = fread(STDIN, 80);
    if ($n == 1) {
        $android = new Android();
        $button = $android->createButton();
        echo $button->doSomething();
        $checkBox = $android->createCheckBox();
        echo $checkBox->doSomething();
    } else {
        $ios = new Ios();
        $button = $ios->createButton();
        echo $button->doSomething();
        $checkBox = $ios->createCheckBox();
        echo $checkBox->doSomething();
    }
}

run();