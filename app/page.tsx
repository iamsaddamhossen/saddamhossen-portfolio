import { Categories } from "./components/categories";
import { Hero } from "./components/hero";
import LatestPosts from "./components/latest-posts";
import { SocialIcons } from "./components/social-icons";
import { getCategories } from "./lib/queries";

export default async function Home() {
  const categories = await getCategories();
  return (
    <section>
      <Hero />
      <SocialIcons />
      <Categories categories={categories} />
      <LatestPosts />
    </section>
  );
}
