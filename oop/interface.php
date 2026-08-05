<?php
/*
#*** Interfaces ****#
An Interface is a special type of structure that defines a contract for classes. It contains only method declarations (without implementation), and any class that implements the interface must provide implementations for all of its methods.
An interface is declared using the interface keyword, and a class implements it using the implements keyword.

#***** Characteristics of Interfaces ****#
1.Declared using the interface keyword.
2.Cannot create objects directly.
3.Contains method declarations (without implementation).
4.All interface methods are public by default.
5.A class implements an interface using the implements keyword.
6.A class must implement all methods declared in the interface.
7.A class can implement multiple interfaces.

syntax:
interface InterfaceName
{
    public function method1();
    public function method2();
}

class ClassName implements InterfaceName
{
    public function method1()
    {
        // Implementation
    }

    public function method2()
    {
        // Implementation
    }
}



Example:


interface Printer
{
    public function printDocument();
}

interface Scanner
{
    public function scanDocument();
}

class MultiFunctionPrinter implements Printer, Scanner
{
    public function printDocument()
    {
        echo "Printing Document...<br>";
    }

    public function scanDocument()
    {
        echo "Scanning Document...";
    }
}

$obj = new MultiFunctionPrinter();

$obj->printDocument();
$obj->scanDocument();

Question: What is the difference between  an abstract class and interface in PHP?
*/

?>