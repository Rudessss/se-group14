using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace CinemaAPI.Migrations
{
    /// <inheritdoc />
    public partial class Initial : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "FilmInfo",
                columns: table => new
                {
                    FilmId = table.Column<string>(type: "nvarchar(450)", nullable: false),
                    FilmName = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    FilmDirector = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    FilmProducer = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    FilmStarring = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    FilmDescription = table.Column<string>(type: "nvarchar(max)", nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_FilmInfo", x => x.FilmId);
                });

            migrationBuilder.CreateTable(
                name: "UserInfo",
                columns: table => new
                {
                    UserId = table.Column<Guid>(type: "uniqueidentifier", nullable: false),
                    FullName = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    PhoneNumber = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    Email = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    Password = table.Column<string>(type: "nvarchar(max)", nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_UserInfo", x => x.UserId);
                });
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "FilmInfo");

            migrationBuilder.DropTable(
                name: "UserInfo");
        }
    }
}
