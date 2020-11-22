<?php


namespace app\data;

class ClassAnalyzer
{
    private $className;
    private $reflector;


    /**
     * @param string $className
     *
     * @throws \ReflectionException
     */
    public function __construct(string $className)
    {
        try {
            $this->className = $className;
            $this->reflector = new \ReflectionClass($this->className);
        } catch (\ReflectionException $e) {
            throw new $e('::class of <fullClassName> does not exists');
        }
    }


    /**
     * Show properties/methods class count in format
     *  Class: {{class_name}} is {{class_type}}
     *  Properties:
     *      public: {{count}}
     *      protected: {{count}}
     *      private: {{count}}
     *  Methods:
     *      public: {{count}}
     *      protected: {{count}}
     *      private: {{count}}
     *
     *
     * @return string
     */
    public function showPropMeth(): string
    {
        $resultString = '';

        $classType = \Reflection::getModifierNames($this->reflector->getModifiers());
        $resultString .= "Class: {$this->className}";
        $resultString .= (!empty($classType[0])) ? " is $classType[0]" : '';
        $resultString .= \PHP_EOL;


        $resultString .= $this->createCountList();


        return $resultString;
    }

    /**
     *
     * Calculate all property/methods in $this->className class
     *
     * @return string
     */
    protected function createCountList(): string
    {
        $reflector = $this->reflector;


        $properties = $reflector->getProperties();
        $methods = $reflector->getMethods();


        $resultArray = [
            'properties' =>
                [
                    'public' => 0,
                    'protected' => 0,
                    'private' => 0,
                ],
            'methods' =>
                [
                    'public' => 0,
                    'protected' => 0,
                    'private' => 0,
                ],
        ];

        foreach ($properties as $property) {
            if ($property->isPublic()) {
                $resultArray['properties']['public']++;
            } elseif ($property->isProtected()) {
                $resultArray['properties']['protected']++;
            } else {
                $resultArray['properties']['private']++;
            }
        }

        foreach ($methods as $method) {
            if ($method->isPublic()) {
                $resultArray['methods']['public']++;
            } elseif ($method->isProtected()) {
                $resultArray['methods']['protected']++;
            } else {
                $resultArray['methods']['private']++;
            }
        }

        return $this->createProtMethViewString($resultArray);
    }

    /**
     * create final view for property/method list from array $this->createCountList
     *
     * @param array $propMethArray
     *
     * @return string
     */
    protected function createProtMethViewString(array $propMethArray): string
    {
        $resultString = '';


        foreach ($propMethArray as $dataKey => $dataType) {
            $resultString .= \sprintf('<comment>%s</comment>', \ucfirst($dataKey) . ':' . \PHP_EOL);

            foreach ($dataType as $securityLevel => $count) {
                $resultString .= "\t $securityLevel: $count" . \PHP_EOL;
            }
        }

        return $resultString;
    }
}




