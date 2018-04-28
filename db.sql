# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases V8.1.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Project1.dez                                    #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2018-04-27 17:04                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Add tables                                                             #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "permissions"                                                #
# ---------------------------------------------------------------------- #

CREATE TABLE `permissions` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `description` VARCHAR(255),
    `name` VARCHAR(50) NOT NULL,
    `active` VARCHAR(10),
    CONSTRAINT `PK_permissions` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "users"                                                      #
# ---------------------------------------------------------------------- #

CREATE TABLE `users` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(30) NOT NULL,
    `password` VARCHAR(64) NOT NULL,
    `email` VARCHAR(100),
    `first_name` VARCHAR(30) NOT NULL,
    `last_name` VARCHAR(40) NOT NULL,
    `super_admin` VARCHAR(40) NOT NULL,
    `active` VARCHAR(40) NOT NULL,
    `role_id` INTEGER,
    CONSTRAINT `PK_users` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "settings"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `settings` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `key` VARCHAR(50) NOT NULL,
    `value` TEXT NOT NULL,
    CONSTRAINT `PK_settings` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "roles"                                                      #
# ---------------------------------------------------------------------- #

CREATE TABLE `roles` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(40) NOT NULL,
    `permissions` VARCHAR(40) NOT NULL,
    CONSTRAINT `PK_roles` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "agents"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `agents` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_agents` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "agents1"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `agents1` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_agents1` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "properties"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `properties` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `property_name` VARCHAR(40),
    `property_description` VARCHAR(40),
    CONSTRAINT `PK_properties` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "locations"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `locations` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_locations` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "rentals"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `rentals` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_rentals` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "features"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `features` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `feature_name` VARCHAR(40),
    `feature_description` VARCHAR(40),
    CONSTRAINT `PK_features` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "property_types"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `property_types` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(40) NOT NULL,
    CONSTRAINT `PK_property_types` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "clients"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `clients` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_clients` PRIMARY KEY (`id`)
);

# ---------------------------------------------------------------------- #
# Add table "client_service_contracts"                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `client_service_contracts` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    CONSTRAINT `PK_client_service_contracts` PRIMARY KEY (`id`)
);
