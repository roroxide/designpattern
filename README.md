
Design Pattern Principles :

+ Encapsulate what varies.
+ Favor composition over inheritance.
+ Program to interfaces, not implementations.
+ Strive for loosely coupled designs between objects that interact.
+ Classes should be open for extension, but closed for modification.
+ Depend upon abstractions. Do not depend upon concrete classes.
+ Don't call us, we'll call you.

Dependency Inversion Principles :

+ No variable should hold a reference to a concrete class.
+ No class should derive from a concrete class.
+ No method should override an implemented method of any of its base classes.


Design Pattern Definitions :

+ Strategy Pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable. Strategy lets the algorithm vary independenty from clients that use it.

+ Observer Pattern defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

+ Decorator Pattern attach additional responsibilities to an object dynamically. Decorators provice a flexible alternative to subclassing for extending functionality.

+ Factory Method Pattern define an interface for creating an object, but let subclasses decide which class to instantiate. Factory Method lets a class defer instantiation to the subclasses.

+ Abstract Factory Pattern provides an interface for creating families of related or dependent objects without specifying their concrete classes.

+ Singleton Pattern ensure a class only has one instance and provice a global point of access to it.

+ Command Pattern encapsulates a request as an object, thereby letting you parameterize client with different requests, queue or log requests, and support undoable operations.

+ Adapter Pattern converts the interface of a class into another interface clients expect lets classes work together that couldn't otherwise because of incompatible interfaces.

+ Facade Pattern provides a unified interface to a set of interfaces in a subsystem. Facade defines a higher-level interface that makes the subsystem easier to use.

+ Template Method Pattern defines the skeleton of an algorithm in an opration, deferring some steps to subclasses. Template Method lets subclass redefine certain steps of an algorithm without changing the algorithm's structure.

+ Iterator Pattern provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

